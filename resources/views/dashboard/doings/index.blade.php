@extends('dashboard.layouts.master')
@section('title', 'ماذا نفعل')

@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="title"> قائمة ماذا نفعل </h4>
        <a href="{{ route('dashboard.doings.create') }}" class="btn btn-secondary mb-2">إضافة بند ماذا نفعل</a>
    </div>
    
    <table class="table table-bordered table-striped">
        <thead class="table-secondary">
            <tr>
                <th> # </th>
                <th> العنوان بالعربي   </th>
                <th> العنوان بالانكليزي </th>
                <th> الصورة </th>
                <th> أوامر </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doings as $doing)
                <tr>
                    <td> {{ $doing->id }}</td>
                    <td> {{ $doing->title_ar }}</td>
                    <td> {{ $doing->title_en }}</td>
                    <td> {!! $doing->icon !!}</td>

                    <td class="text-nowrap">
                        <a href="{{ route('dashboard.doings.edit', $doing) }}" class="btn btn-outline-primary">
                            <i data-feather="edit"></i>
                        </a>
                        <form action="{{ route('dashboard.doings.destroy', $doing) }}" method="post" class="d-inline-block"
                            onsubmit="return confirm('Are you sure you want to delete {{ $doing->name }}?' )">
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
