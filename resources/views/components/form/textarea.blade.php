<div class="input-area">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <textarea id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}" name="{{ $name }} {{ empty($required) ? 'required' : '' }}"></textarea>
</div>
