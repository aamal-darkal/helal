@extends('dashboard.layouts.master')
@section('title', 'إضافة ملف')
@section('content')
    <h4 class="title"> إضافة ملف</h4>
    
    <form action="{{ route('dashboard.fileUploads.store') }}" method="post" >
        @csrf
        <x-input name="description" label="الوصف" required maxlength="150"  />
        {{-- <x-select-create name="type" label="النوع"  :options=$fileTypes /> --}}
        <x-input name="image_id" label="" required />
        
        <div class="mb-3">
            <x-input name="image_id" label="الملف" type="file" onchange="showFile(this)" />
            <img class="border border-secondary" id="img-review" src="{{ asset('storage/no-image.png') }}" width="300">
        </div>

        
        <button class="btn btn-secondary">إضافة الملف</button>
        <a href="{{ route('dashboard.fileUploads.index') }}" class="btn btn-outline-secondary">عودة</a>
    </form>
@endsection

@push('css')
    @include('dashboard.css-components.multi-select')
@endpush

@push('js')
    @include('dashboard.js-components.multi-select')

    <script>
        // Initiating the multi-select    

        $(document).ready(function() {
            $("#keywords").chosen();
        })
    </script>

@endpush
