@extends('dashboard.layouts.master')
@section('title', 'إضافة ملف')
@section('content')
    <h4 class="title"> إضافة ملف</h4>
    
    <form action="{{ route('dashboard.fileUploads.update' ,  $fileUpload) }}" method="post" enctype="multipart/form-data" >
        @csrf
        <x-input name="name" label="اسم الملف" required maxlength="50" :dbValue="$fileUpload->name" />
        <x-select-edit name="type" label="النوع"  :options=$fileTypes :dbValue="$fileUpload->type"/>
        <x-input name="description" label="وصف الملف" required maxlength="200"  :dbValue="$fileUpload->description"/>
               
        <div class="mb-3">
            <x-input name="file" label="الملف" type="file" onchange="showFile(this , 'file-review')" />
             <embed class="border border-secondary" id="file-review" src="{{ asset("storage/files/$fileUpload->type/$fileUpload->name") }}"
                width="300">
        </div>

        <button class="btn btn-secondary">حفظ الملف</button>
        <a href="{{ route('dashboard.fileUploads.index') }}" class="btn btn-outline-secondary">عودة</a>
    </form>
@endsection

@push('js')
    @include('dashboard.js-components.showUploadedfile')
@endpush
