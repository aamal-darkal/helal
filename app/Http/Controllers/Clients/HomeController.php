<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Doing;
use App\Models\Keyword;
use App\Models\Setting;
use App\Models\Martyer;
use App\Models\Section;
use Illuminate\Http\Request;

class HomeController extends Controller
{

        /**
     * 
     */
    public function index()
    {
        $locale = app()->getLocale();

        $martyers = Martyer::select('DOB',  "name_$locale as name", 'province_id')
            ->with(['province' => function ($q) use ($locale) {
                return $q->select('id', "name_$locale as name");
            }])->get();

        
        $news = Section::select('id', 'date', 'image_id', "title_$locale as title", "content_$locale as content")->where('type', 'news')->where('hidden', 0)->latest()->get();
        $stories = Section::select('id', 'date', 'image_id', "title_$locale as title", "content_$locale as content")->where('type', 'story')->where('hidden', 0)->latest()->get();
        $compaign = Section::select('id', 'date', 'image_id', "title_$locale as title", "content_$locale as content")->where('type', 'compaign')->where('hidden', 0)->latest()->first();

        return view('home.index', compact( 'martyers',   'news', 'stories',  'compaign',));
    }
    /**
     * 
     */
    function show(Section $section)
    {
        return view('home.show', compact( 'section' ));
    }


    function search(Request $request)
    {
        $locale = app()->getLocale();


        $doing = Doing::find($request->doing);
        $search = $request->search;

        $results = Section::select('id', "title_$locale as title")->when($doing, function ($q) use ($doing) {
                $q->Wherehas(
                    'Keywords',
                    function ($q) use ($doing) {
                        $ids = $doing->Keywords->modelkeys();
                        return $q->wherein('id', $ids);
                    }
                );
            })
            ->when($search, function ($q) use ($search) {
                return  $q->where('title_ar', 'like', "%$search%")
                    ->orwhere('title_en', 'like', "%$search%");
            })
            ->get();
        $title = "title_$locale";
        $key = $doing ? $doing->$title : $search;
        return view('home.search', compact('results', 'key', ));
    }
}
