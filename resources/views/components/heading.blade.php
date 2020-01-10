@php  
if(isset($color)) {
    $sizes = [
        "small" => "text-sm ". $color. " leading-normal",
        "normal" => "text-base ". $color. " leading-normal", 
        "large" => "text-lg ". $color. " font-semibold leading-normal font-serif", 
        "heading" => "text-xl md:text-2xl ". $color. " font-bold leading-tight font-serif", 
        "heading2" => "text-2xl md:text-3xl ". $color. " font-bold leading-tight font-serif",
        "small-caps" =>  $color. " text-xs font-bold tracking-wider uppercase",
        "display" => "text-2xl md:text-5xl ". $color. " leading-none font-bold tracking-tight font-serif",
        "display2" => "text-4xl md:text-6xl ". $color. " leading-none font-bold tracking-tight font-serif"
    ];
}else {
    $sizes = [
        "small" => "text-sm text-gray-600 leading-normal",
        "normal" => "text-base text-gray-600 leading-normal", 
        "large" => "text-lg text-gray-700 font-semibold leading-normal font-serif", 
        "heading" => "text-xl md:text-2xl text-gray-700 font-bold leading-tight font-serif", 
        "heading2" => "text-2xl md:text-3xl text-gray-700 font-bold leading-tight font-serif",
        "small-caps" => "text-gray-500 text-xs font-bold tracking-wider uppercase",
        "display" => "text-2xl md:text-5xl text-gray-700 leading-none font-bold tracking-tight font-serif",
        "display2" => "text-4xl md:text-6xl text-gray-700 leading-none font-bold tracking-tight font-serif"
    ];
}

@endphp 
<p class="{{isset($size) ? $sizes[$size] : $sizes['normal']}} {{$classes ?? ''}}">
    {{$slot}}
</p>