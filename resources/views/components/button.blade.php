<div>
    @if (!isset($variant) || $variant == 'primary')
    <button 
        type="{{ $type ?: 'button' }}" 
        class="text-white text-normal px-6 py-4 bg-blue-500 hover:bg-blue-600 rounded-lg {{$classes ?? ''}}"
        name="{{ $name ?: 'submitButton' }}" 
        {{ isset($attributes) ? $attributes : '' }}>
        {{ $slot }}
    </button>
    @endif
    @if (isset($variant) && $variant == 'secondary')
    <button 
        type="{{ $type ?: 'button' }}" 
        class="text-gray-600 text-normal px-6 py-4 bg-gray-200 hover:bg-gray-400 hover:text-gray-700 rounded-lg {{$classes ?? ''}}"
        name="{{ $name ?: 'submitButton' }}" 
        {{ isset($attributes) ? $attributes : '' }}>
        {{ $slot }}
    </button>
    @endif
</div>