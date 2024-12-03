@extends('layouts.app')
@section('title', __('helal.home'))
@section('content')
    <div class="view-wrapper">
        <hr class="content-divider">
        <div class="filter-box">
            <h2 class="text-salmon"> {{ $key }}</h2>
            <select name="type" class="form-select" onchange="getUrl(this.value);">
                <option value="1">@lang('helal.all')</option>
                @foreach (config('app.section-type') as $option)
                    <option value="{{ $option }}" @selected($option == $type)>{{ __('helal.' . $option) }}</option>
                @endforeach
            </select>
        </div>
        @foreach ($results as $result)
            <div class="topic">
                <div class="topic-desc p-2">
                    <div class="topic-title">
                        <h2>{{ $result->title }}</h2>
                    </div>

                    <div class="d-none"> {!! $result->content !!} </div>
                    <div class="summary" data-length="{{ $result->summary_length }}"></div>

                    <a href="{{ route('home.show', $result) }}"
                        class="btn btn-sm btn-outline-secondary mt-3">@lang('helal.readmore')
                    </a>
                </div>
                <div class="img-wrapper">
                    <img src="{{ $result->image_id ? asset(getImgUrl($result->image_id)) : '' }}">
                </div>
            </div>
        @endforeach

        @if ($results->count())
            <div class="border-top pt-2 pagination-1">
                {{ $results->links() }}.
            </div>
            @else
            <p> @lang('helal.notFound') </p>
        @endif
    </div>
    <div class="text-center mb-4"><a class="btn btn-salmon mt-3" href="{{ url()->previous() }}">@lang('helal.back')</a>


    </div>
@endsection
