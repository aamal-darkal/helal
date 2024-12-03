@props(['name', 'element_id', 'label', 'options' => []])
<div class="mb-3 text-right">
    <label for="{{ $element_id }}" class="form-label">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $element_id }}" class="form-select w-100" {{ $attributes }} multiple>
        @foreach ($options as $option)
            <option value="{{ $option->id }}" @selected(in_array($option->id, old('keywords', [])))>{{ $option->name }}</option>
        @endforeach
    </select>
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>