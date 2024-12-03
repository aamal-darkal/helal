@extends('dashboard.layouts.master')
@section('title', 'تعديل' . __("helal.section-types.$type.singular"))
@section('content')
    <h4 class="title"> تعديل {{ __("helal.section-types.$type.singular") }} </h4>

    <form action="{{ route('dashboard.sections.update', ['section' => $section, 'type' => $type]) }}" method="post"
        enctype="multipart/form-data">
        @csrf

        <x-input name="title" :dbValue="$section->title" label="العنوان" />
        <x-input name="content" :dbValue="$section->content" label="المحتوى" />

        <div class="d-flex align-items-center">
            <x-input data-name="keyword" name="" label="الكلمات المفتاحية" />
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
            <x-input name="image" label="الصورة الأساسية 1400* 700" type="file" onchange="showFile(this)" />
            <img class="border border-secondary" id="img-review" src="{{ asset('assets/images/form/no-image.png') }}"
                width="300">
        </div>

        <button class="btn btn-secondary">تعديل {{ __("helal.section-types.$type.singular") }}</button>
        <a href="{{ route('dashboard.sections.index') }}" class="btn btn-outline-secondary">عودة</a>
    </form>
    <script>
        function addKeyword() {
            const inp = document.querySelector("[data-name='keyword']");
            if (inp.value == '') return;
            const label = inp.value;
            inp.value = ''
            const template = document.getElementById("template-keyword").children[0]
            const newKeyword = template.cloneNode(true)
            newKeyword.querySelector('input').value = label
            newKeyword.querySelector('span').innerHTML = label
            document.querySelector("#keywords").appendChild(newKeyword)
        }

        function deleteKeyword(inp) {
            inp.parentNode.remove();
        }

        function showFile(input) {
            let file = input.files[0];

            if (file.type && !file.type.startsWith('image/')) {
                console.log('File is not an image.', file.type, file);
                return;
            }
            const reader = new FileReader();
            reader.addEventListener('load', () => {
                document.getElementById('img-review').src = reader.result;
            });
            //readAsDataURL method encodes the file as a base64 encoded string, which can be used directly in image elements.
            reader.readAsDataURL(file);
        }
    </script>
@endsection
