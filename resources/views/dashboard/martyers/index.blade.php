@extends('dashboard.layouts.master')
@section('title', 'الشهداء')
@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="title"> شهداء </h4>
        <a href="{{ route('dashboard.martyers.create') }}" class="btn btn-secondary mb-2">إضافة شهيد</a>
    </div>
    <form action="{{ route('dashboard.martyers.index') }}" class="d-flex mb-2">
        <a href="{{ route('dashboard.martyers.index') }}" class="btn btn-secondary text-nowrap">كافة الشهداء</a>
        <input type="text" class="form-control" name="search">
        <button class="btn btn-secondary">بحث</button>
    </form>
    <table class="table table-bordered table-striped">
        <thead class="table-secondary">
            <tr>
                <th> # </th>
                <th>  الاسم بالعربي</th>
                <th> الاسم بالإنكليزي</th>
                <th> تاريخ الولادة </th>
                <th> المحافظة بالعربي </th>
                <th> المحافظة بالإنكليزي </th>
                <th> أوامر </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($martyers as $martyer)
                <tr>
                    <td> {{ $martyer->id }}</td>
                    <td> {{ $martyer->name_ar }}</td>
                    <td> {{ $martyer->name_en }}</td>
                    <td> {{ $martyer->DOB }}</td>
                    <td> {{ $martyer->city_ar }}</td>
                    <td> {{ $martyer->city_en }}</td>

                    <td class="text-nowrap">
                        <a href="{{ route('dashboard.martyers.edit', $martyer) }}" class="btn btn-outline-primary">
                            <i data-feather="edit"></i>
                        </a>
                        <form action="{{ route('dashboard.martyers.destroy', $martyer) }}" method="post" class="d-inline-block"
                            onsubmit="return confirm('Are you sure you want to delete {{ $martyer->name }}?' )">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger"><i data-feather="trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $martyers->links('pagination::bootstrap-5') }}

@endsection
