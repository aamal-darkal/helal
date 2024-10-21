@props([
    'name',
    'label',
    'dbValue',
    'type' => 'text',   
])
<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $name }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old( $name , $dbValue ) }}" id="{{ $name }}"
     {{ $attributes }} class="form-control @error($name) is-invalid @enderror">
    
        @error($name )
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
