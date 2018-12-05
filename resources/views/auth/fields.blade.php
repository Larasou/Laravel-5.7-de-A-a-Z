<div class="flex flex-col my-5">
    <input type="{{ $type }}" name="{{ $name }}"
           value="{{ old($name) }}"
           placeholder="{{ $placeholder }}"
           class="form-auth {{ $errors->first($name, 'is-error') }}">
    {!! $errors->first($name, '<p class="mt-1 lg:ml-3 text-red font-bold text-xs lg:text-sm">:message</p>') !!}
</div>
