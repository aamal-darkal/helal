@extends('dashboard.layouts.master')
@section('title', 'Edit Category')
@section('content')
    <h4>Edit Martyer</h4>

    <form action="{{ route('dashboard.martyers.update', $martyer) }}" method="post">
        @csrf
        @method('put')

        <x-edit-input name="name" :dbValue="$martyer->name" label="اسم الشهيد" required maxlength="50"/>
        <x-edit-input name="name_en" :dbValue="$martyer->name_en" label="الاسم باللغة الإنكليزية" required maxlength="50"/>
        <x-edit-input name="DOB" :dbValue="$martyer->DOB" label="مواليد/عام" type="number" min="1901" max="2200" />
        <x-edit-input name="city" :dbValue="$martyer->city" label="محافظة" maxlength="50"/>     

        <button class="btn btn-secondary">حفظ بيانات الشهيد </button>
        <a href="{{ route('dashboard.martyers.index') }}" class="btn btn-outline-secondary">عودة</a>
    </form>
@endsection
