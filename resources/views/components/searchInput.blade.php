@php
$setRounded = $rounded ?? 'medium';
$setBordered = $bordered ?? true;
$setSize = $size ?? 'normal';
$setClasses = '';

if($setRounded === 'medium') {
	$setClasses.=" rounded-lg";
} 
if($setRounded === 'large') {
	$setClasses.=" rounded-full";
} 
if($setBordered === true) {
	$setClasses.=" border-2 focus:border-blue-600";
} 
if($setBordered === false) {
	$setClasses.=" border bg-gray-200 focus:bg-white";
} 
if($setSize === 'small') {
	$setClasses.=" h-10";
} 
if($setSize === 'normal') {
	$setClasses.=" h-12";
}   
@endphp

<div>
    <input
            id="search-input-{{ $name }}" 
            type="text"
            class="search-input px-4 py-2 leading-normal block w-full text-gray-800 bg-white font-sans text-left appearance-none outline-none {{$setClasses}}" 
            name="{{ $name }}" 
            placeholder="{{ isset($placeholder) ? $placeholder : '' }}"  
    />
</div>  
