@props(['label', 'route'])

<button type="button" class="px-3 py-1 text-gray-100 rounded-md bg-gray-900">
    <a href="{{ $route }}">
        {{ $label }}
    </a>
</button>
