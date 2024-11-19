@props([
    'name',
    'label',
    'options' =>[]
])
<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="form-select">
        <option value="" hidden>-- اختر {{ $label }}</option>
        @foreach ($options as $option)
            <option value="{{ $option->id }}" @selected(old($name) == $option->id)>{{ $option->name }}</option>
        @endforeach
    </select>
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>