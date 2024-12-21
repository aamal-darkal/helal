@extends('dashboard.layouts.master')
@section('title', 'الملفات')

@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="title"> قائمة الملفات المحملة </h4>
        <a href="{{ route('dashboard.fileUploads.create') }}" class="btn btn-secondary mb-2">إضافة ملف</a>
    </div>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-secondary">
            <tr class="">
                <th> # </th>
                <th> الاسم </th>
                <th> النوع </th>
                <th> url </th>
                <th> الوصف </th>
                <th> الحساب </th>
                <th> معاينة </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fileUploads as $fileUpload)
                <tr>
                    <td> {{ $fileUpload->id }}</td>
                    <td> {{ $fileUpload->name }}</td>
                    <td> {{ $fileUpload->type }}</td>
                    <td class="wrap-word"> {{ asset("storage/files/$fileUpload->type/$fileUpload->name") }}</td>
                    <td> {{ $fileUpload->description }}</td>
                    <td> {{ $fileUpload->createdBy->name }}</td>
                    <td>
                        <embed src="{{ asset("storage/files/$fileUpload->type/$fileUpload->name") }}" frameborder="1"
                            width="300" height="180">
                    </td>
                    <td class="text-nowrap">
                        <a href="{{ route('dashboard.fileUploads.edit', $fileUpload) }}" class="btn btn-outline-primary">
                            <i data-feather="edit"></i>
                        </a>
                        <form action="{{ route('dashboard.fileUploads.destroy', $fileUpload) }}" method="post"
                            class="d-inline-block"
                            onsubmit="return confirm('Are you sure you want to delete {{ $fileUpload->title }}?' )">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger"><i data-feather="trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
