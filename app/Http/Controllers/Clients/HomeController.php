<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Doing;


use App\Models\Martyer;
use App\Models\Province;
use App\Models\Section;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * 
     */

    private function getProvinces()
    {
        $locale =   app()->getLocale();

        $provinces = Province::select("id", "name_en", "name_$locale as name")->get();
        foreach ($provinces as $province)
            $cities[$province->name_en] = ['id' => $province['id'], 'name' => $province['name']];
        return $cities;
    }

    public function index(Request $request)
    {
        $locale = app()->getLocale();

        $martyers = Martyer::select('DOD',  "name_$locale as name", 'province_id')
            ->with(['province' => function ($q) use ($locale) {
                return $q->select('id', "name_$locale as name");
            }])->get();

        $provinces = $this->getProvinces();
        // return $provinces;
        /** 400 can be replace from settings */
        $news = Section::select('id', 'date', 'image_id', 'summary_length', "title_$locale as title", DB::raw("substr(REGEXP_REPLACE(content_$locale, '<[^>]*>+', '') , 1 ,400) as content"))->where('type', 'news')->where('hidden', 0)->orderBy('date', 'desc')->limit(6)->get();
        $stories = Section::select('id', 'date', 'image_id', 'summary_length', "title_$locale as title", DB::raw("substr(REGEXP_REPLACE(content_$locale, '<[^>]*>+', '') , 1 ,400) as content"))->where('type', 'story')->where('hidden', 0)->orderBy('date', 'desc')->limit(6)->get();
        $campaign = Section::select('id', 'date', 'image_id', 'summary_length', "title_$locale as title", DB::raw("substr(REGEXP_REPLACE(content_$locale, '<[^>]*>+', '') , 1 ,400) as content"))->where('type', 'campaign')->where('hidden', 0)->orderBy('date', 'desc')->first();

        return view(
            'home.index',
            compact('martyers',   'news', 'stories',  'campaign', 'provinces')
        );
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
    function showVacancy(Vacancy $vacancy)
    {
        $section = $vacancy;
        return view('home.show', compact('section'));
    }


    function search(Request $request)
    {
        $type = $request->type;

        if ($type == 'vacancy') {
            $results = Vacancy::select('id',   "title", "content" , DB::raw("'100' as  summary_length") ,  'image_id' , DB::raw("'vacancy' as type") , 'date')
            ->orderBy('date', 'desc')->paginate(5)->withQueryString();
            $key =  "vacancies";
            return view('home.search', compact('results', 'key', 'type'));            
        }

        $locale = app()->getLocale();


        $doing =  $request->doing;
        $search = $request->search;
        $province = $request->province;

        /** for doing with keyword */

        $results = Section::select("id", "title_$locale as title",  "content_$locale as content", "summary_length", "image_id", "type" , "date")
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
                function ($q) use ($doing) {
                    return $q->wherehas(
                        'doings',
                        function ($q) use ($doing) {
                            return $q->where('id', $doing);
                        }
                    );
                }
            )
            ->where('hidden' , false )
            ->orderBy('date', 'desc')->paginate(5)->withQueryString();
        // return $results;
        $title = "title_$locale";
        $name = "name_$locale";

        $key = $province ? __('helal.section-types.news.plural')  . " " . Province::find($province)->$name : ($type ?   __("helal.section-types.$type.plural") : ($search ? $search : 
        ($doing ? Doing::find($doing)->$title :
            __('helal.organization-news'))));
        // return $results;
        return view('home.search', compact('results', 'key', 'type'));
    }
}
