@php
    $variants = [
        "primary" => 'text-blue-600 border-blue-200 hover:text-blue-700 hover:border-blue-400',
        "danger" => 'text-red-600 border-red-200 hover:text-red-700 hover:border-red-400',
        "success" => 'text-green-600 border-green-200 hover:text-green-700 hover:border-green-400',
        "warning" => 'text-orange-600 border-orange-200 hover:text-orange-700 hover:border-orange-400'
    ];
@endphp
<a 
        href="{{$to}}"
        class="border-b-2 {{$display ?? 'inline-flex'}} {{isset($variant) ? $variants[$variant] : $variants['primary']}}" 
    >
        {{$slot}}
</a>
