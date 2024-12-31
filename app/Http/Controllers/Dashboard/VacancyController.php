<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\VacancyRequest;
use App\Models\Image;
use App\Models\Province;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VacancyController extends Controller
{
    /** 
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $search = $request->search;
        $vacancies = Vacancy::when($search, function ($q) use ($search) {
            return $q->where(function ($q) use ($search) {
                return $q->where('title', 'like', "%$search%")
                    ->orWhere('title', 'like', "%$search%");
            });
        })->paginate();
        return view('dashboard.vacancies.index',   compact('vacancies', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::select('id', 'name_ar as name')->get();

        return view(
            'dashboard.vacancies.create',
            compact('provinces')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VacancyRequest $request)
    {
        $validated = $request->validated();
        $validated['created_by'] = Auth::user()->id;

        if ($request->hasFile('image_id')) {
            $validated['image_id'] = saveImg('vacancy', $request->file('image_id'));
        }

        Vacancy::create($validated);

        return to_route('dashboard.vacancies.index')->with('success', "تم إضافة بيانات الشاغر بنجاح");
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy)
    {
        return redirect()->route("home.showVacancy", ['vacancy' => $vacancy]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        $provinces = Province::select('id', 'name_ar as name')->get();
        return view('dashboard.vacancies.edit', compact('provinces',  'vacancy',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VacancyRequest $request, Vacancy $vacancy)
    {
        $validated = $request->validated();
        $validated['updated_by'] = Auth::user()->id;

        $oldImage = null;
        if ($request->hasFile('image_id')) {
            $oldImage = Image::find($vacancy->image_id);
            $validated['image_id'] = saveImg('vacancy', $request->file('image_id'));
        }

        $vacancy->update($validated);

        /** delete image record from images table with related file */
        if ($oldImage) {
            Storage::disk('public')->delete($oldImage->name);
            $oldImage->delete();
        }

        return to_route('dashboard.vacancies.index')->with('success', "تم حفظ بيانات الشاغر بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        $oldImage = Image::find($vacancy->image_id);
        $title = $vacancy->title;
        $vacancy->delete();

        if ($oldImage) {
            Storage::disk('public')->delete($oldImage->name);
            $oldImage->delete();
        }

        return back()->with('success', "تم محي الشاغر ذات العنوان: $title بنجاح ");
    }
}
