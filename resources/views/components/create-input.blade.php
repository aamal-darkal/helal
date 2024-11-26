    
@props([
    'name',
    'label',
    'type' => 'text'
])
<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" {{ $attributes }}
    class="form-control @error($name) is-invalid @enderror" value="{{ old( $name ) }}">

    @error( $name )
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
