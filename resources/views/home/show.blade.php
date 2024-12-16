@extends('layouts.app')
@section('title', __('helal.home'))
@section('content')
    <div class="view-wrapper p-3">
        <div class="view-cover">
            <img class="w-100" src="{{ asset(getImgUrl($section->image_id)) }}">
        </div>
        <h2>{{ $section->title }}</h2>
        <div>
            {!! $section->content !!}
        </div>
        <div class="text-center mb-4"><a class="btn-salmon px-3 py-2" href="{{ url()->previous() }}">@lang('helal.back')</a>
        </div>
    </div>
@endsection
