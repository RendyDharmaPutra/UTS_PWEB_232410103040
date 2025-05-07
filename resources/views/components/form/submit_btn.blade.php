@props(['label', 'color' => 'green-500', 'border' => 'green-600'])

<button type="submit"
    class="py-2 px-4 text-white rounded w-full bg-{{ $color }} hover:bg-{{ $border }} border border-{{ $border }} duration-300">{{ $label }}</button>
