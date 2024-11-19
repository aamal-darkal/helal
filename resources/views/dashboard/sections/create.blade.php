@extends('dashboard.layouts.master')
@section('title', 'إضافة فرع')
@section('content')
    <h4 class="title"> إضافة فرع</h4>
    
    <form action="{{ route('dashboard.branches.store') }}" method="post" >
        @csrf

        <x-create-input name="name" label="الاسم بالعربي" required maxlength="30"  />
        <x-create-input name="name_en" label="الاسم بالانكليزي " required maxlength="30"/>
        <x-create-input name="location" label="العنوان بالعربي" required maxlength="255"  />
        <x-create-input name="location_en" label="العنوان بالانكليزي " required maxlength="255"/>
        <x-create-input name="phone"  label="الهاتف" maxlength="10" minlength="10" pattern="[0-9]{10}" title="10 digits"/>

        <button class="btn btn-secondary">إضافة فرع</button>
        <a href="{{ route('dashboard.branches.index') }}" class="btn btn-outline-secondary">عودة</a>
    </form>
@endsection

@extends('dashboard.layouts.master')
@section('title', 'إضافة' . config("section.$type.singular", 'section'))
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

    <form action="{{ route('dashboard.sections.store', ['type' => $type]) }}" method="post" enctype="multipart/form-data"
        onsubmit="getcontent();addKeyword()" name="sectionForm">
        @csrf

        <button type="button" onclick="setContent()">test</button> <br>
        <br>
        <br>

        <div class="group-fields">
            <div class="group-title">العنوان</div>
            <x-create-input name="title" label="بالعربي" />
            <x-create-input name="title_en" label="بالانكليزي" />
        </div>

        <div class="group-fields">
            <div class="group-title">المحتوى</div>

            <label for="content" class="form-label"> بالعربي</label>
            <div id="richtext"></div>
            {{-- <textarea name="content" class="d-none"></textarea> --}}
            <textarea name="content" id="content"></textarea>
            <br>
            <label for="content" class="form-label"> بالانكليزي</label>
            <div id="richtext-en"></div>
            {{-- <textarea name="content_en" class="d-none"></textarea> --}}
            <textarea name="content_en" id="content_en"></textarea>
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

        <button class="btn btn-secondary">إضافة {{ config("section.$type.singular", 'section') }}</button>
        <a href="{{ route('dashboard.sections.index') }}" class="btn btn-outline-secondary">عودة</a>
    </form>
@endsection

@push('css')
    @include('dashboard.css-components.richtext')
@endpush

@push('js')
    @include('dashboard.js-components.richtext')

    <script>
        var editor_ar = new RichTextEditor("#richtext");
        var editor_en = new RichTextEditor("#richtext-en");

        function setContent(){
            console.log(editor_ar.getHTMLCode())
            document.getElementById('content').value = editor_ar.getHTMLCode()
            sectionForm.content.value = editor_ar.getHTMLCode();
            sectionForm.content_en.value = editor_en.getHTMLCode();
        }
        function getcontent() {
            document.getElementById('content').value = editor_ar.getHTMLCode();
            document.getElementById('content_en').value = editor_en.getHTMLCode();
        }
    </script>

    @include('dashboard.js-components.keywords')
    @include('dashboard.js-components.showfile')
@endpush
