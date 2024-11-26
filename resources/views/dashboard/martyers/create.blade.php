@extends('dashboard.layouts.master')
@section('title', 'إضافة شهيد')
@section('content')
    <h4 class="title"> إضافة شهيد</h4>
    
    <form action="{{ route('dashboard.martyers.store') }}" method="post" >
        @csrf

        <x-input name="name_ar" label="الاسم بالعربي" required maxlength="50"  />
        <x-input name="name_en" label="الاسم بالإنكليزي" required maxlength="50"/>
        <x-input name="DOB" type="number" label="مواليد/عام" min="1901" max="2200" />

        <x-select-create name="province_id" label="المحافظة"  :options=$provinces />

        <button class="btn btn-secondary">إضافة شهيد</button>
        <a href="{{ route('dashboard.martyers.index') }}" class="btn btn-outline-secondary">عودة</a>
    </form>
@endsection