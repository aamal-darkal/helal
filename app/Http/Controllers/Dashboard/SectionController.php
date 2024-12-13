<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Models\Keyword;
use App\Models\Menu;
use App\Models\Province;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SectionController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    // public $type;
    public function __construct(Request $request)
    {
        session()->flash('type', $request->type);
    }

    public function index(Request $request)
    {
        $type = $request->type;
        $search = $request->search;
        $sections = Section::when($search , function($q) use ($search){
            return $q->where(function($q) use ($search){
                return $q->where('title_ar', 'like', "%$search%")
                ->orWhere('title_en', 'like', "%$search%");
            });            
        })
        ->where('type', $type)->paginate();
        return view('dashboard.sections.index',   compact('sections', 'type' , 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $type = $request->type;
        $menu = $request->menu;
        if ($menu) $menu = Menu::find($menu);
        $provinces = Province::select('id', 'name_ar as name')->get();
        $keywords = Keyword::select('id', DB::raw("concat(word_en , ' - ' , word_ar) as name"))->get();

        return view(
            'dashboard.sections.create',
            compact('type', 'provinces', 'keywords', 'menu')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request)
    {
        $validated = $request->validated();
        $validated['created_by'] = Auth::user()->id;
        if (
            ! $request->has('type') ||
            !in_array($request->type, ['article', 'campaign', 'news', 'story', 'vacancy', 'page'])
        )
            return back()->with('error', 'يوجد خطأ في تحديد نوع المقطع المضاف');
        else $validated['type'] = $request->type;

        if ($request->hasFile('image_id')) {
            $validated['image_id'] = saveImg($request->type, $request->file('image_id'));
        }

        $section = Section::create($validated);
        if ($request->keywords)
            $section->Keywords()->attach($validated['keywords']);

        $menu_id = $request->menu_id;
        if ($menu_id) {
            $menu = Menu::find($menu_id);            
            $menu->update(['url' => "show/$section->id", 'section_id' => $section->id]);
            return to_route('dashboard.menus.show', [$menu->menu_id])->with('success', "تم إضافة بند للقائمة  " . $menu->parentMenu->title_ar ." بنجاح");
        }
        return to_route('dashboard.sections.index', ['type' => $validated['type']])->with('success', "تم إضافة بيانات" . __("helal.section-types.$validated[type].singular")  .  "بنجاح");
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        return redirect()->route("home.show", ['section' => $section]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section, Request $request)
    {
        $menu = $request->menu;
        if ($menu)
            $menu = Menu::find($menu);
        $type = $section->type;
        $provinces = Province::select('id', 'name_ar as name')->get();
        $keywords = Keyword::select('id', DB::raw("concat(word_en , ' - ' , word_ar) as name"))->get();
        $currKeywords = $section->keywords->modelKeys();

        return view('dashboard.sections.edit', compact('type', 'provinces', 'keywords', 'currKeywords', 'section', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectionRequest $request, Section $section)
    {
        $validated = $request->validated();
        $validated['updated_by'] = Auth::user()->id;

        $type = $section['type'];

        if ($request->hasFile('image_id')) {
            if ($section->image)
                Storage::disk('public')->delete($section->image->name);

            $validated['image_id'] = saveImg($type, $request->file('image_id'));
        }

        $section->update($validated);

        if ($request->keywords) {
            $section->Keywords()->sync($validated['keywords']);
        }

        $menu_id = $request->menu_id;
        if ($menu_id) {
            $menu = Menu::find($menu_id);                        
            return to_route('dashboard.menus.show', [$menu->menu_id])->with('success', "تمت تعديل بند القائمة  $menu->title_ar بنجاح");
        }
        return to_route('dashboard.sections.index', ['type' => $type])->with('success', "تمت حفظ بيانات ال" .  __("helal.section-types.$type.singular") . " بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        if ($section->image)
            Storage::disk('public')->delete($section->image->name);

        $title = $section->title_ar;
        $type = $section->type;
        $section->delete();
        return back()->with('success', "تم محي $type ذات عنوان: $title بنجاح ");
    }
}
