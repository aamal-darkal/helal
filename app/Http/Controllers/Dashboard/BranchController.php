<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller

{
    public function index(Request $request)
    {
        $branches = Branch::get();
        return view('dashboard.branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dashboard.branches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =  $request->validate([
            'name' => 'required|string|max:30|unique:branches',
            'name_en' => 'nullable|string|max:30|unique:branches',
            'location' => 'nullable|string|max:255',
            'location_en' => 'nullable|string|max:255',
            'phone' => 'nullable|digits:10'
        ]);

        Branch::create($validated);
        return to_route('dashboard.branches.index')->with('success', "تم إضافة الفرع بنجاح");
    }


    public function edit(Branch $branch)
    {

        return view('dashboard.branches.edit',  compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branch $branch)
    {
        $validated =  $request->validate([
            'name' => "required|string|max:30|unique:branches,name,$branch->id",
            'name_en' => "required|string|max:30|unique:branches,name_en,$branch->id",
            'location' => 'nullable|string|max:255',
            'location_en' => 'nullable|string|max:255',
            'phone' => 'nullable|digits:10'
        ]);

        $branch->update($validated);


        return to_route('dashboard.branches.index')->with('success', "تم تعديل الفرع بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $users = $branch->users->count();
        if ($users)
            return back()->with('error', " لايمكن محي الفرع لوجد مستخدم  $users مرتبط به");

        $sections = $branch->sections->count();
        if ($sections)
            return back()->with('error', " لايمكن محي الفرع لوجد $sections عنصر مرتبطة به");

        $branch->delete();
        
        return back()->with('success', " تم محي الفرع بنجاح");
    }
}
