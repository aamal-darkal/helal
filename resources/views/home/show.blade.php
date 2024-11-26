@extends('layouts.app')
@section('title', __('helal.home'))
@section('content')
    <div class="view-wrapper">
        <div class="view-cover">
            <img class="w-100" src="{{ asset(getImgUrl($section->image_id)) }}">
        </div>
        <h1>{{ $section->title_ar }}</h1>
        <div>
            {!! $section->content_ar !!}
        </div>
            <div class="text-center mb-4"><a class="btn-salmon px-3 py-2" href="{{ url()->previous() }}">@lang('helal.Back')</a></div>
    </div>
@endsection
