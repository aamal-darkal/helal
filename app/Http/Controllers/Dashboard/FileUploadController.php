<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileUploadController extends Controller
{
    public function index(Request $request)
    {
        $fileUploads = FileUpload::get();
        return view('dashboard.fileUploads.index', compact('fileUploads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fileTypes = [
            ['id' => 1, 'name' => 'image'],
            ['id' => 2, 'name' => 'pdf'],
        ];
        return view('dashboard.fileUploads.create', compact('fileTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =  $request->validate([
            'type' => 'required|string|in:image,pdf',
            'description' => 'required|string|max:150',
            'image_id' => 'required|file|max:2000',
        ]);
        $validated['created_by'] = Auth::user()->id;

        $validated['image_id'] = saveImg($request->type, $request->file('image_id'));

        $fileUpload = FileUpload::create($validated);

        $fileUpload->save();

        return to_route('dashboard.fileUploads.index')->with('success', "تم إضافة سجل أعمالنا بنجاح");
    }


    public function edit(FileUpload $fileUpload)
    {
        // $currKeywords = $fileUpload->keywords->modelKeys();

        // return view('dashboard.fileUploads.edit',  compact('fileUpload', 'keywords', 'currKeywords'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FileUpload $fileUpload)
    {
        // $validated =  $request->validate([
        //     'title_ar' => "required|string|max:50|unique:fileUploads,title_ar,$fileUpload->id",
        //     'title_en' => "nullable|string|max:50|unique:fileUploads,title_en,$fileUpload->id",
        //     'icon' => 'nullable|string',
        //     'keywords' => 'nullable|array',
        // ]);
        // $validated['updated_by'] = Auth::user()->id;

        // $fileUpload->update($validated);


        // $fileUpload->menu()->update([
        //     'title_ar' =>  $validated['title_ar'],
        //     'title_en' => $validated['title_en'],
        //     'updated_by' => $validated['updated_by'],
        // ]);

        // if ($request->keywords)
        //     $fileUpload->Keywords()->sync($validated['keywords']);
        // return to_route('dashboard.fileUploads.index')->with('success', "تم تعديل سجل أعمالنا بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileUpload $fileUpload)
    {

        // $title = $fileUpload->title;
        // $menu_id = $fileUpload->menu_id;
        // $fileUpload->delete();
        // Menu::find($menu_id)->delete();

        // return back()->with('success', " تم محي سجل أعمالنا: $title بنجاح");
    }
}
