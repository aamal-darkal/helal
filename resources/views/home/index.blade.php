@extends('layouts.app')
@section('title', __('helal.home'))
@section('content')
    @include('welcome.cover')
    @include('welcome.statistic')
    @include('welcome.doing')
    @include('welcome.news')
    @include('welcome.stories')
    @include('welcome.compaign')
    @include('welcome.martyrs')
    @include('welcome.map')
    @push('js')
        <script>
            const contentElements = document.querySelectorAll('.summary')
            for (let contentElement of contentElements) {
                const length = contentElement.getAttribute('data-length')
                let summary= contentElement.previousElementSibling.innerText.trim().substring(0, length) + "..."
                contentElement.innerHTML = summary.substring(0, summary.lastIndexOf(" "))
            }
        </script>
    @endpush
@endsection
