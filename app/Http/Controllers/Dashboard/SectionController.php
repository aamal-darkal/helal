<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Models\Keyword;
use App\Models\Section;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class SectionController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public $type;
    public function __construct(Request $request)
    {
        session()->flash('type', $request->type);
    }
    public function index(Request $request)
    {
        $type = $request->type;
        $sections = Section::where('type', $type)->paginate();
        return view('dashboard.sections.index',   compact('sections', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $type = $request->type;
        return view('dashboard.sections.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request)
    {
        $validated = $request->validated();
        $validated['created_by'] = Auth::user()->id;

        $type = $validated['type'];

        if ($request->hasFile('image')) {
            $validated['image_id'] = upload::save($request->type, $request->file('image'))->id;
        }
        
        $section = Section::create($validated);
        if ($request->keywords){
            foreach ($validated['keywords'] as $keyword)
                Keyword::create([
                'section_id' => $section->id,
                'keyword' => $keyword]);
        }

        return to_route('dashboard.sections.index' , ['type' => $type])->with('success', "تمت إضافة بيانات  $validated[type] بنجاح");

    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section, Request $request)
    {
        $type = $request->type;
        return view('dashboard.sections.edit', compact('type', 'section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectionRequest $request, Section $section)
    {
        $validated = $request->validated();
        $validated['updated_by'] = Auth::user()->id;
        $type = $validated['type'];
      
        if ($request->hasFile('image')) {
            FacadesStorage::disk('public')->delete($section->image->name);

            $validated['image_id'] = upload::save($type, $request->file('image'))->id;
        }

        if ($request->keywords) {
            $section->Keywords()->delete();
            foreach ($validated['keywords'] as $keyword)
                Keyword::create([
                    'section_id' => $section->id,
                    'keyword' => $keyword
                ]);
        }
        $section = $section->update($validated);

        return to_route('dashboard.sections.index' , ['type' => $type])->with('success', "تمت حفظ بيانات  $validated[type] بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        //
    }
}
