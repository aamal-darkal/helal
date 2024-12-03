<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Keyword;
use Illuminate\Http\Request;


class KeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $keywords = Keyword::when($search, function ($q) use ($search) {
                return $q->where('value',  'like', "%$search%");
            })
            ->paginate(7);
        
        return view('dashboard.keywords.index' , compact('keywords'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Keywords.create');        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'word_ar' => 'required|string|max:30|unique:keywords',
            'word_en' => 'required|string|max:30|unique:keywords',
        ]);
        Keyword::create($validated);        

        return to_route('dashboard.keywords.index')->with('success', "تمت إضافة الكلمة المفتاحية $validated[word_ar]($validated[word_en]) بنجاح");
    }
    

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keyword $keyword)
    {
        $keywordValue = "$keyword->word_ar($keyword->word_en)";
        $keyword->delete();
        return back()->with('success', "تم محي الكلمة المفتاحية  $keywordValue بنجاح");

    }
}