@php 
$setVariant=$variant ?? 'info';
$variants = [
    "info" => "bg-blue-100 text-blue-800 border-blue-200", 
    "danger" => "bg-red-100 text-red-800 border-red-200",
    "success" => "bg-green-100 text-green-800 border-green-200",
    "warning" => "bg-orange-100 text-orange-600 border-orange-200"
]; 
@endphp

<div
    class="flex p-4 rounded-lg border-2 {{$classes??''}} {{$variants[$setVariant] }}"
    role="alert" 
>
    @if(isset($withIcon))
        @if($setVariant == 'info')
        <svg 
            class="flex-shrink-0 fill-current text-blue-500 mr-3"
            width="32"
            height="32"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
        >
            <path d="M0 0h24v24H0z" fill="none" />
            <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"
            />
        </svg>
        @elseif($setVariant == 'danger' || $setVariant == 'warning')
        <svg 
            class="flex-shrink-0 fill-current text-red-500 mr-3 {{$setVariant == 'danger' ? 'text-red-500' : ''}} {{$setVariant == 'warning' ? 'text-orange-500' : ''}}"
            width="32"
            height="32"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
        >
            <path d="M0 0h24v24H0z" fill="none" />
            <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"
            />
        </svg>
        @elseif($setVariant == 'success')
        <svg 
            class="flex-shrink-0 fill-current text-green-500 mr-3"
            width="32"
            height="32"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
        >
            <path d="M0 0h24v24H0z" fill="none" />
            <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
            />
        </svg>
        @endif
    @endif
    <div class="pt-1">
        {{$slot}}
    </div>
</div>