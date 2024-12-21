@extends('dashboard.layouts.master')
@section('title', 'الحسابات')

@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="title"> الحسابات </h4>
        <a href="{{ route('dashboard.users.create') }}" class="btn btn-secondary mb-2">إضافة حساب</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-secondary">
            <tr>
                <th> # </th>
                <th> الاسم </th>
                <th> البريد الالكتروني </th>
                <th> المحافظة </th>
                <th> حالة الحساب </th>
                <th> أوامر </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
                <tr>
                    <td> {{ $user->id }}</td>
                    <td> {{ $user->name }}</td>
                    <td> {{ $user->email }}</td>
                    <td> {{ $user->province->name_ar }}</td>
                    <td>
                        @if ($user->type == 'banned')
                            <span class="text-danger"><i data-feather="user-x"></i></span>
                        @elseif ($user->type == 'admin')
                            <span class="text-warning"><i data-feather="user-plus"></i></span>
                        @else
                            <span class="text-success"><i data-feather="user-check"></i></span>
                        @endif
                    </td>

                    <td class="text-nowrap">

                        <a href="{{ route('dashboard.users.edit', $user) }}" class="btn btn-sm btn-outline-primary">
                            <i data-feather="edit"></i>
                        </a>
                        <a href="{{ route('dashboard.users.reset-password') }}">
                            تصفير كلمة السر
                        </a>

                        {{-- <button type="button" class="btn btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#passwordModal">
                            <i data-feather="unlock"></i>
                        </button>

                        <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title fs-5" id="exampleModalLabel">Change password of user
                                            {{ $user->name }}</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('dashboard.dashboard.users.password-reset', ['id' => $user->id]) }}"
                                            method="post" class="d-inline-block">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="password" class="col-form-label">new password</label>
                                                <input type="text" class="form-control" id="password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="verfiy-password" class="col-form-label">verify password</label>
                                                <input type="text" class="form-control" id="verfiy-password">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">reset password</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
