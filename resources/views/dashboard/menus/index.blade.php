@extends('dashboard.layouts.master')
@section('title', 'القائمة الرئيسية')

@section('content')
    <div class="d-flex justify-content-between">
        <div>
            <a class="btn btn-secondary btn-sm" href="{{ url()->previous() }}">&rightarrow;</a>
            <h4 class="title d-inline-block me-2"> <a href="{{ route('dashboard.menus.index') }}">القائمة العلوية</a> @if ($menu) / {{ $menu->title_ar }} @endif</h4>
        </div>
        @if ($menu)
            <a href="{{ route('dashboard.menus.create' ,['menu' => $menu]) }}" class="btn btn-secondary mb-2">إضافة بند لقائمة {{ $menu->title_ar }} </a>
        @endif
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-secondary">
            <tr>
                <th> # </th>
                <th> العنوان بالعربي </th>
                <th> العنوان بالانكليزي </th>
                <th> المسار </th>
                <th> الترتيب </th>
                <th> الأوامر </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td> {{ $menu->id }}</td>
                    <td> {{ $menu->title_ar }}</td>
                    <td class="dir-ltr"> {{ $menu->title_en }}</td>
                    <td class="dir-ltr"> {{ $menu->url }}</td>
                    <td class="text-center"> {{ $menu->order }}</td>

                    <td class="text-nowrap">

                        <button type="button" @disabled($menu->locked)
                            onclick="location='{{ route('dashboard.menus.edit', $menu) }}'"
                            class="btn @if ($menu->locked) btn-outline-secondary @else btn-outline-primary @endif"
                            @disabled($menu->locked)>
                            <i data-feather="edit"></i>
                        </button>
                        <form action="{{ route('dashboard.menus.destroy', $menu) }}" method="post" class="d-inline-block"
                            onsubmit="return confirm('Are you sure you want to delete {{ $menu->name }}?' )">
                            @csrf
                            @method('delete')
                            <button @disabled($menu->locked)
                                class="btn @if ($menu->locked) btn-outline-secondary @else btn-outline-danger @endif"><i
                                    data-feather="trash"></i></button>
                        </form>
                        <button type="button" @disabled(!$menu->sub_menus_count)
                            onclick="location='{{ route('dashboard.menus.show', $menu) }}'"
                            class="btn @if (!$menu->sub_menus_count) btn-outline-secondary @else btn-outline-success @endif">
                            <i data-feather="eye"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
