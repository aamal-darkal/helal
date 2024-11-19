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