<div class="input-area">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <textarea
        id="{{ $name }}"
        placeholder="{{ $placeholder ?? '' }}"
        name="{{ $name }}"
        required="{{ empty($required) ? 'required' : '' }}"
    >{{ $value ?? '' }}</textarea>
</div>
