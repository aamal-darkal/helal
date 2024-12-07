<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doing;
use App\Models\Keyword;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DoingController extends Controller

{
    public function index(Request $request)
    {
        $doings = Doing::get();
        return view('dashboard.doings.index', compact('doings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $keywords = Keyword::select('id', DB::raw("concat(word_en , ' - ' , word_ar) as name"))->get();
        return view('dashboard.doings.create', compact('keywords'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =  $request->validate([
            'title_ar' => 'required|string|max:50|unique:doings',
            'title_en' => 'nullable|string|max:50|unique:doings',
            'icon' => 'nullable|string',
            'keywords' => 'nullable|array',
        ]);
        $validated['created_by'] = Auth::user()->id;

        $doing = Doing::create($validated);

        if ($request->keywords)
            $doing->Keywords()->attach($validated['keywords']);

        // if ($request->menu) {
        //     Menu::create([
        //         'title_ar' =>  $validated['title_ar'],
        //         'title_en' => $validated['title_en'],
        //         'url' => "search?doing=$doing->id",
        //     ]);
        // }
        return to_route('dashboard.doings.index')->with('success', "تم إضافة سجل أعمالنا بنجاح");
    }


    public function edit(Doing $doing)
    {
        $keywords = Keyword::select('id', DB::raw("concat(word_en , ' - ' , word_ar) as name"))->get();
        $currKeywords = $doing->keywords->modelKeys();

        return view('dashboard.doings.edit',  compact('doing', 'keywords', 'currKeywords'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doing $doing)
    {
        $validated =  $request->validate([
            'title_ar' => "required|string|max:50|unique:doings,title_ar,$doing->id",
            'title_en' => "nullable|string|max:50|unique:doings,title_en,$doing->id",
            'icon' => 'nullable|string',
            'keywords' => 'nullable|array',
        ]);
        $validated['update_by'] = Auth::user()->id;

        $doing->update($validated);

        if ($request->keywords)
            $doing->Keywords()->sync($validated['keywords']);
        return to_route('dashboard.doings.index')->with('success', "تم تعديل سجل أعمالنا بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doing $doing)
    {

        $title = $doing->title;
        $doing->delete();

        return back()->with('success', " تم محي سجل أعمالنا: $title بنجاح");
    }
}
