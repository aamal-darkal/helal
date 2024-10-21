@extends('dashboard.layouts.master')
@section('title', 'إضافة شهيد')
@section('content')
    <h4 class="title"> إضافة شهيد</h4>
    
    <form action="{{ route('dashboard.martyers.store') }}" method="post" >
        @csrf

        <x-create-input name="name" label="اسم الشهيد" required maxlength="50"  />
        <x-create-input name="name_en" label="الاسم باللغة الأنكليزية" required maxlength="50"/>
        <x-create-input name="DOB" type="number" label="مواليد/عام" min="1901" max="2200" />
        <x-create-input name="city" label="محافظة" maxlength="50"/>

        <button class="btn btn-secondary">إضافة شهيد</button>
        <a href="{{ route('dashboard.martyers.index') }}" class="btn btn-outline-secondary">عودة</a>
    </form>
@endsection