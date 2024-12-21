@extends('dashboard.layouts.master')
@section('title', 'إضافة ' . __("helal.section-types.$type.singular"))
@section('content')
    <h4 class="title"> إضافة {{ __("helal.section-types.$type.singular") }}
        
        @if($menu)  لبند القائمة: {{ $menu->title_ar }} @endif
    </h4>

    <form action="{{ route('dashboard.sections.store', ['type' => $type]) }}" method="post" enctype="multipart/form-data"
        onsubmit="readRich()" name="sectionForm">
        @csrf
        @if($menu) <input type="hidden" name="menu_id" value="{{ $menu->id }}"> @endif
        <div class="group-fields">
            <div class="group-title">العنوان</div>
            <x-input name="title_ar" label="بالعربي" />
            <x-input name="title_en" label="بالانكليزي" class="dir-ltr"/>
        </div>

        <div class="group-fields">
            <div class="group-title">المحتوى</div>
            <br>

            <label for="content_ar" class="form-label"> بالعربي </label>
            <div id="content_ar"></div>
            <textarea name="content_ar" class="d-none">{{ old('content_ar') }}</textarea>
            @error('content_ar')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror

            <br>
            <label for="content_en" class="form-label"> بالانكليزي </label>
            <div id="content_en"></div>
            <textarea name="content_en" class="d-none">{{ old('content_en') }}</textarea>
            @error('content_en')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <br>

        <x-input type="date" name="date" label='تاريخ ال{{ __("helal.section-types.$type.singular") }}' />

        <x-checkbox name="hidden" label="مخفي" />
        
        <div class="mb-3">
            <x-input name="image_id" label="الصورة الأساسية 1400* 700" type="file" accept="image/*" onchange="showFile(this , 'img-review')" />

            <img class="border border-secondary" id="img-review" src="{{ asset('storage/no-image.png') }}" width="300">
        </div>

        <x-select-create-multiple element_id="doings" name="doings[]" label="الخدمات" :options=$doings />

        <x-select-create name="province_id" label="المحافظة" :options=$provinces />

        <div class="mb-3">
            <label for="summary_length" class="form-label">عدد محارف الجزء المعروض في الصفحة الرئيسية</label>
            <input type="number" name="summary_length" id="summary_length"
                class="form-control @error('summary_length') is-invalid @enderror"
                value="{{ getValue('news-sammery-length') }}">

            @error('summary_length')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-secondary">إضافة  @lang("helal.section-types.$type.singular") </button>
        <a href="{{ route('dashboard.sections.index', ['type' => $type]) }}" class="btn btn-outline-secondary">عودة</a>

    </form>
@endsection

@push('css')
    @include('dashboard.css-components.richtext')
    @include('dashboard.css-components.multi-select')
@endpush

@push('js')
    @include('dashboard.js-components.richtext')
    @include('dashboard.js-components.multi-select')

    <script>
        // Initiating the multi-select  & richtext  

        var editor_en = new RichTextEditor("#content_en");
        var editor_ar = new RichTextEditor("#content_ar");

        $(document).ready(function() {
            $("#doings").chosen();
            fillRich();
        })

        function fillRich() {
            editor_ar.setHTMLCode(sectionForm.content_ar.value);
            editor_en.setHTMLCode(sectionForm.content_en.value);
        }

        function readRich() {
            sectionForm.content_ar.value = editor_ar.getHTMLCode();
            sectionForm.content_en.value = editor_en.getHTMLCode();
        }
    </script>

    @include('dashboard.js-components.showUploadedfile')
@endpush
