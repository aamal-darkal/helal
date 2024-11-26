@extends('layouts.app')
@section('title', __('helal.home'))
@section('content')
<div class="view-wrapper">
    <hr class="content-divider">
    <h2 class="text-salmon"> {{ $key }}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $i => $result)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td><a href="{{ route('home.show' , $result->id) }}">{{ $result->title }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-center mb-4"><a class="btn-salmon px-3 py-2" href="{{ url()->previous() }}">@lang('helal.Back')</a>


    </div>
@endsection
