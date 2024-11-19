@extends('dashboard.layouts.master')
@section('title', 'إضافة حساب')
@section('content')
    <h4 class="title"> تعديل حساب</h4>
    
    <form action="{{ route('dashboard.users.update' , $user) }}" method="post" >
        @csrf
        @method('put')
        <x-edit-input name="name" :dbValue="$user->name" label="الاسم" required maxlength="50"  />
        <x-edit-input name="email" :dbValue="$user->email" label="البريد الالكتروني" required maxlength="50"/>
        <div>
            <label class="form-label">نوع المستحدم</label> <br>

            <input class="form-check-input" name="type" type="radio" value="user" id="user" @checked($user->type == 'user')>
            <label for="user"> user </label>
            <input class="form-check-input me-4 mb-3" name="type" type="radio" value="admin" id="admin" @checked($user->type == 'admin')>
            <label for="banned"> admin </label>
            <input class="form-check-input me-4 mb-3" name="type" type="radio" value="banned" id="banned" @checked($user->type == 'banned')>
            <label for="admin" class="text-danger"> banned </label>
        </div>
        <x-select-edit name="branch_id" :dbValue="$user->branch_id" label="branch" :options=$branches  />


        <button class="btn btn-secondary">تعديل حساب</button>
        <a href="{{ route('dashboard.users.index') }}" class="btn btn-outline-secondary">عودة</a>
    </form>
@endsection

