@extends('dashboard.layouts.master')
@section('title', 'ماذا نفعل')

@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="title"> قائمة الملفات المحملة </h4>
        <a href="{{ route('dashboard.fileUploads.create') }}" class="btn btn-secondary mb-2">إضافة ملف</a>
    </div>
    
    <table class="table table-bordered table-striped">
        <thead class="table-secondary">
            <tr>
                <th> # </th>
                <th> الوصف   </th>
                <th> النوع </th>
                <th> معاينة </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fileUploads as $fileUpload)
                <tr>
                    <td> {{ $fileUpload->id }}</td>
                    <td> {{ $fileUpload->description }}</td>
                    <td> {{ $fileUpload->type }}</td>
                    <td><img src="{{ getImgUrl($fileUpload->image_id) }}" width="75" ></td>                            
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
