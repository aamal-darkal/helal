@extends('dashboard.layouts.master')
@section('title', 'تعديل' . config("section.$type.singular", 'section'))
@section('content')

    <h4 class="title"> إضافة {{ config("section.$type.singular", 'section') }} </h4>

    <div id="template-keyword" class="d-none">
        <div class="alert alert-success p-1 d-inline ms-1 mb-5">
            <input type="hidden" name="keywords[]">
            <span class="d-inline"></span>
            <button type="button" class="btn btn-sm bg-transparent mb-3" onclick="deleteKeyword(this)">
                <i data-feather="x"></i>
            </button>
        </div>
    </div>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="text-danger">{{ $error }}</div>
        @endforeach
    @endif
    <form action="{{ route('dashboard.sections.update', ['section' => $section, 'type' => $type]) }}" method="post"
        enctype="multipart/form-data" onsubmit="getcontent();addKeyword()" name="sectionForm">
        @csrf
        @method('put')
        <div class="group-fields">
            <div class="group-title">العنوان</div>
            <x-edit-input name="title" :dbValue="$section->title" label="بالعربي" />
            <x-edit-input name="title_en" :dbValue="$section->title_en" label="بالانكليزي" />
        </div>

        <div class="group-fields">
            <div class="group-title">المحتوى</div>
            <label for="content" class="form-label"> بالعربي</label>
            <div id="richtext"></div>
            <textarea id="content" name="content" class="d-none">{{ $section->content }}</textarea>
            <br>
            <label for="content" class="form-label"> بالانكليزي</label>
            <div id="richtext-en"></div>
            <textarea id="content_en" name="content_en" class="d-none">{{ $section->content_en }}</textarea>
        </div>
        <br>
        <div class="d-flex align-items-center">
            <x-create-input data-name="keyword" name="" label="الكلمات المفتاحية" />
            <button type="button" onclick="addKeyword()" class="btn btn-outline-secondary mt-1 me-1">+</button>
        </div>
        <div id="keywords"></div>

        <div class="mb-3">
            <label for="visible" class="form-label">مرئي</label>
            <input type="checkbox" name="visible" id="visible" checked class="ms-2" value="1">
            @error('visible')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <x-create-input name="image" label="الصورة الأساسية 1400* 700" type="file" onchange="showFile(this)" />
            <img class="border border-secondary" id="img-review" src="{{ asset('assets/images/form/no-image.png') }}"
                width="300">
        </div>

        <button class="btn btn-secondary">حفظ {{ config("section.$type.singular", 'section') }}</button>
        <a href="{{ route('dashboard.sections.index') }}" class="btn btn-outline-secondary">عودة</a>


    </form>
    <button class='btn btn-primary' onclick="event.preventDefault();Do_SetHTML();return false;">Set
        HTML</button>
@endsection

@push('css')
    @include('dashboard.css-components.richtext')
@endpush

@push('js')
    @include('dashboard.js-components.richtext')

    <script>
        var editor_ar = new RichTextEditor("#richtext");
        var editor_en = new RichTextEditor("#richtext-en");
        document.body.onload = function() {
            editor_ar.setHTMLCode(document.getElementById('content').value)
            editor_en.setHTMLCode(document.getElementById('content_en').value)
        }        

        function getcontent() {
            document.getElementById('content').value = editor_ar.getHTMLCode();
            document.getElementById('content_en').value = editor_en.getHTMLCode();

        }
    </script>

    @include('dashboard.js-components.keywords')
    @include('dashboard.js-components.showfile')
@endpush
