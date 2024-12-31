@extends('dashboard.layouts.app')
@section('title', 'الشواغر')
@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="title"> الشواغر </h4>
        <a href="{{ route('dashboard.vacancies.create', ) }}" 
        class="btn btn-secondary mb-2">إضافة شاغر</a>
    </div>
    <form action="{{ route('dashboard.vacancies.index') }}" class="d-flex mb-2">
        <button class="btn btn-secondary">بحث</button>
        <input type="text" class="form-control" name="search" value="{{ $search }}">
        @if ($search)
            <a href="{{ route('dashboard.vacancies.index') }}"
                class="btn btn-outline-secondary text-nowrap">كافة الشواغر</a>
        @endif
    </form>
    <table class="table table-bordered table-striped">
        <thead class="table-secondary">

            <tr>
                <th> # </th>
                <th> العنوان  </th>
                <th> مخفي</th>
                <th> الصورة </th>
                <th> أوامر </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vacancies as $vacancy)
                <tr>
                    <td> {{ $vacancy->id }}</td>
                    <td> {{ $vacancy->title }}</td>
                    <td> <input type="checkbox" @checked($vacancy->visible) disabled></td>
                    <td><img src="{{ getImgUrl($vacancy->image_id) }}" width="75"></td>

                    <td class="text-nowrap">
                        <a href="{{ route('dashboard.vacancies.edit', $vacancy) }}" class="btn btn-outline-primary">
                            <i data-feather="edit"></i>
                        </a>
                        <form action="{{ route('dashboard.vacancies.destroy', $vacancy) }}" method="post"
                            class="d-inline-block"
                            onsubmit="return confirm('سيتم محي   {{ $vacancy->title }}?' )">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger"><i data-feather="trash"></i></button>
                        </form>
                        <a href="{{ route('dashboard.vacancies.show', $vacancy) }}" class="btn btn-outline-success">
                            <i data-feather="eye"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $vacancies->links() }}

@endsection
