@props([
    'name',
    'label',    
    'dbValue' => 0    
])
<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" @checked(old($name , $dbValue ) == 1) class="ms-2" value="1">
    @error($name)
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
