@extends('dashboard.layouts.master')
@section('title', 'الفروع')

@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="title"> الفروع </h4>
        <a href="{{ route('dashboard.branches.create') }}" class="btn btn-secondary mb-2">إضافة فرع</a>
    </div>
    
    <table class="table table-bordered table-striped">
        <thead class="table-secondary">
            <tr>
                <th> # </th>
                <th>  الاسم بالعربي </th>
                <th>  الاسم بالانكليزي </th>
                <th> العنوان بالعربي   </th>
                <th> العنوان بالانكليزي </th>
                <th> أوامر </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($branches as $branch)
                <tr>
                    <td> {{ $branch->id }}</td>
                    <td> {{ $branch->name }}</td>
                    <td> {{ $branch->name_en }}</td>
                    <td> {{ $branch->location }}</td>
                    <td> {{ $branch->location_en }}</td>
                    <td> {{ $branch->phone }}</td>

                    <td class="text-nowrap">
                        <a href="{{ route('dashboard.branches.edit', $branch) }}" class="btn btn-outline-primary">
                            <i data-feather="edit"></i>
                        </a>
                        <form action="{{ route('dashboard.branches.destroy', $branch) }}" method="post" class="d-inline-block"
                            onsubmit="return confirm('Are you sure you want to delete {{ $branch->name }}?' )">
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
