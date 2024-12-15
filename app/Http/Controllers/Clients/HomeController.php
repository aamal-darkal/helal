<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Doing;


use App\Models\Martyer;
use App\Models\Province;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * 
     */
    public function index(Request $request)
    {
        $locale = app()->getLocale();
        
        $martyers = Martyer::select('DOB',  "name_$locale as name", 'province_id')
            ->with(['province' => function ($q) use ($locale) {
                return $q->select('id', "name_$locale as name");
            }])->get();
        
        /** 400 can be replace from settings */
        $news = Section::select('id', 'date', 'image_id', 'summary_length', "title_$locale as title", DB::raw("substr(REGEXP_REPLACE(content_$locale, '<[^>]*>+', '') , 1 ,400) as content"))->where('type', 'news')->where('hidden', 0)->orderBy('date', 'desc')->limit(6)->get();
        $stories = Section::select('id', 'date', 'image_id', 'summary_length',"title_$locale as title", DB::raw("substr(REGEXP_REPLACE(content_$locale, '<[^>]*>+', '') , 1 ,400) as content"))->where('type', 'story')->where('hidden', 0)->orderBy('date' , 'desc')->limit(6)->get();
        $campaign = Section::select( 'id', 'date', 'image_id', 'summary_length',"title_$locale as title", DB::raw("substr(REGEXP_REPLACE(content_$locale, '<[^>]*>+', '') , 1 ,400) as content"))->where('type', 'campaign')->where('hidden', 0)->orderBy('date' , 'desc')->first();            

        return view('home.index', 
        compact('martyers',   'news', 'stories',  'campaign', ));
    }
    /**
     * 
     */
    function show(Section $section)
    {
        $locale = app()->getLocale();

        $title = "title_$locale";
        $content = "content_$locale";
        $section->title = $section->$title;
        $section->content = $section->$content;
        
        return view('home.show', compact('section'));
    }


    function search(Request $request)
    {
        $locale = app()->getLocale();
        
        $type = $request->type;
       
        $doing =  $request->doing;
        $search = $request->search;
        $province = $request->province;

        /** for doing with keyword */


        /** get keywords of doings as ids [$keywordIds] to be compared with section's keywords
         * & as string [$keywordWords] to be compared with section's titles  */
        $keywordIds = [];
        $keywordWords = "";
        if ($doing) {            
            $doing = Doing::find($doing);
            if ($doing && $doing->Keywords()->count()) {
                /** get keyword Ids as array */
                $keywordIds = $doing->Keywords->modelkeys();
                /** get keyword words as array */
                $keywordWords = $doing->Keywords()->pluck("word_$locale")->toArray();
                $keywordWords = implode("|", $keywordWords);
                $keywordWords = "('$keywordWords')";
            } else
                $keywordWords = "('-')";
        }

        $results = Section::select( "id" ,"title_$locale as title",  "content_$locale as content" , "summary_length" , "image_id" , "type")
        /** for certain province */
            ->when($province, function ($q) use ($province) {
                return $q->Where('province_id', $province);
            })
        /** for certain type */
            ->when($type, function ($q) use ($type) {
                return $q->Where('type', $type);
            })        
            /** for free search */
            ->when($search, function ($q) use ($search) {
                return  $q->where('title_ar', 'like', "%$search%")
                    ->orwhere('title_en', 'like', "%$search%");
            })
            /** for certain doing */
            ->when(
                $doing,
                function ($q) use ($keywordIds, $keywordWords) {
                    $q->Wherehas(
                        'Keywords',
                        function ($q) use ($keywordIds) {
                            return $q->wherein('id', $keywordIds);
                        }
                    )
                        ->orWhereRaw("title_ar REGEXP $keywordWords")
                        ->orwhereRaw("title_en REGEXP $keywordWords");
                }
            )            
            ->orderBy('date' , 'desc')->paginate(5)->withQueryString();
            // return $results;
        $title = "title_$locale";
        $name = "name_$locale";
        
        $key = $province ? __('helal.section-types.news.plural')  . " " . Province::find($province)->$name : 
        ($type ?   __("helal.section-types.$type.plural") :         
        ($search ? $search :         
        ($doing ? $doing->$title : 
        __('helal.organization-news')  )));
            // return $results;
        return view('home.search', compact('results', 'key' , 'type' ));
    }
   
}
