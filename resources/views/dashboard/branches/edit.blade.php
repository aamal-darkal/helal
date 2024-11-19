@extends('dashboard.layouts.master')
@section('title', 'Edit Category')
@section('content')
    <h4> تعديل الفرع</h4>

    <form action="{{ route('dashboard.branches.update', $branch) }}" method="post">
        @csrf
        @method('put')

        
        <x-edit-input name="name" label="الاسم بالعربي" required maxlength="30"  :dbValue="$branch->name"/>
        <x-edit-input name="name_en" label="الاسم بالانكليزي " required maxlength="30" :dbValue="$branch->name_en"/>
        <x-edit-input name="location" label="العنوان بالعربي" required maxlength="255"  :dbValue="$branch->location" />
        <x-edit-input name="location_en" label="العنوان بالانكليزي " required maxlength="255" :dbValue="$branch->location_en"/>
        <x-edit-input name="phone"  label="الهاتف" :dbValue="$branch->phone" maxlength="10" minlength="10" pattern="[0-9]{10}" title="10 digits"/>        

        

        <button class="btn btn-secondary">حفظ بيانات الفرع </button>
        <a href="{{ route('dashboard.branches.index') }}" class="btn btn-outline-secondary">عودة</a>
    </form>
@endsection
