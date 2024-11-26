@extends('dashboard.layouts.master')
@section('title', 'Edit Category')
@section('content')
    <h4>تعديل بيانات الشهيد </h4>

    <form action="{{ route('dashboard.martyers.update', $martyer) }}" method="post">
        @csrf
        @method('put')

        <x-input name="name_ar" :dbValue="$martyer->name" label="الاسم بالعربي" required maxlength="50"  />
        <x-input name="name_en" :dbValue="$martyer->name_en" label="الاسم بالإنكليزي" required maxlength="50"/>
        <x-input name="DOB" :dbValue="$martyer->DOB" type="number" label="مواليد/عام" min="1901" max="2200" />

        <x-select-edit name="province_id" :dbValue="$martyer->province_id" label="branch" :options=$provinces  />
            
        <button class="btn btn-secondary">حفظ بيانات الشهيد </button>
        <a href="{{ route('dashboard.martyers.index') }}" class="btn btn-outline-secondary">عودة</a>
    </form>
@endsection
