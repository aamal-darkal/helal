@extends('dashboard.layouts.master')
@section('title', 'الكلمات المفتاحية')

@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="title"> الكلمات المفتاحية </h4>
        <a href="{{ route('dashboard.keywords.create') }}" class="btn btn-secondary mb-2">إضافة كلمة مفتاحية</a>
    </div>
    
    <table class="table table-bordered table-striped">
        <thead class="table-secondary">
            <tr>
                <th> # </th>
                <th>  الكلمة بالعربي </th>
                <th>  الكلمة بالانكليزي </th>
                <th> أوامر </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keywords as $branch)
                <tr>
                    <td> {{ $branch->id }}</td>
                    <td> {{ $branch->word_ar }}</td>
                    <td> {{ $branch->word_en }}</td>

                    <td class="text-nowrap">                        
                        <form action="{{ route('dashboard.keywords.destroy', $branch) }}" method="post" class="d-inline-block"
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
