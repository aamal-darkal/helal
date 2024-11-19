@extends('dashboard.layouts.master')
@section('title', 'sections')
@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="title"> {{ config("section.$type.plural", 'section') }} </h4>
        <a href="{{ route('dashboard.sections.create' , ['type' => $type]) }}" class="btn btn-secondary mb-2">إضافة {{ config("section.$type.singular", 'section') }}</a>
    </div>
    <form action="{{ route('dashboard.sections.index') }}" class="d-flex mb-2">
        <a href="{{ route('dashboard.sections.index') }}" class="btn btn-secondary text-nowrap">كافة {{ config("section.$type.plural", 'section') }}</a>
        <input type="text" class="form-control" name="search">
        <button class="btn btn-secondary">بحث</button>
    </form>
    <table class="table table-bordered table-striped">
        <thead class="table-secondary">

            <tr>
                <th> # </th>
                <th>  العنوان بالعربي </th>
                <th> العنوان بالانكليزي</th>
                <th> مرئي</th>
                <th> الصورة </th>
                <th> أوامر </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sections as $section)
                <tr>
                    <td> {{ $section->id }}</td>
                    <td> {{ $section->title }}</td>
                    <td> {{ $section->title_en }}</td>
                    <td> <input type="checkbox" @checked($section->visible) disabled></td>
                    <td><img src="{{ asset('storage/' .  ($section->image?$section->image->name:"images/no-image.png")) }}" width="75" 
                        alt="{{ asset('storage/' . ($section->image?$section->image->name:"images/no-image.png")) }}"></td>

                    <td class="text-nowrap">
                        <a href="{{ route('dashboard.sections.edit', ['type' => $type , 'section' => $section ]) }}" class="btn btn-outline-primary">
                            <i data-feather="edit"></i>
                        </a>
                        <form action="{{ route('dashboard.sections.destroy', $section) }}" method="post" class="d-inline-block"
                            onsubmit="return confirm('Are you sure you want to delete {{ $section->title }}?' )">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger"><i data-feather="trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $sections->links('pagination::bootstrap-5') }}

@endsection
