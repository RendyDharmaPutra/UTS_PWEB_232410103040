@props(['name', 'label', 'type' => 'text', 'class' => '', 'defaultValue' => ''])

<div class="flex flex-col gap-1 w-full {{ $class }}">
    <label for="{{ $name }}" class="font-medium text-sm text-gray-700">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" required
        value="{{ old($name, $defaultValue) }}"
        class="p-2 w-full rounded-md bg-gray-100 border border-gray-300 focus:bg-white outline-none duration-300">
</div>
