<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Martyer;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MartyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $martyers = Martyer::when($search, function ($q) use ($search) {
                return $q->where('title',  'like', "%$search%");
            })
            ->paginate(7);
        
        return view('dashboard.martyers.index' , compact('martyers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::select('id', 'name_ar as name')->get();
        return view('dashboard.martyers.create' , compact('provinces'));        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_ar' => 'required|string|max:50',
            'name_en' => 'required|string|max:50',            
            'DOB' => 'nullable|digits:4|integer|min:1901|max:2200',
            'province_id' => 'exists:province,id',
        ]);
        $validated['created_by'] = Auth::user()->id;

        Martyer::create($validated);        

        return to_route('dashboard.martyers.index')->with('success', "تمت إضافة بيانات الشهيد $validated[name_ar] بنجاح");
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Martyer $martyer)
    {
        $provinces = Province::select('id', 'name_ar as name')->get();
        return view('dashboard.martyers.edit' , compact('martyer' , 'provinces'));                
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Martyer $martyer)
    {
        $validated = $request->validate([
            'name_ar' => 'required|string|max:50',
            'name_en' => 'required|string|max:50',
            'DOB' => 'nullable|digits:4|integer|min:1901|max:2200',
            'province_id' => 'exists:province,id',
        ]);
        $validated['updated_by'] = Auth::user()->id;
        $martyer->update($validated);

        return to_route('dashboard.martyers.index')->with('success', "تم تعديل بيانات  $validated[name_ar] بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Martyer $martyer)
    {
        $martyeName = $martyer->name_ar;
        $martyer->delete();

        return back()->with('success', "تم محي سجل  $martyeName بنجاح");
    }
}
