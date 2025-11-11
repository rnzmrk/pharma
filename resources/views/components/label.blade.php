<label for="{{ $for }}" {{ $attributes->merge(['class' => 'form-label fw-bold'])}}>
    {{ $value ?? $slot }}
</label>
