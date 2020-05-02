@php
    $setType = $type ?? 'button';
    $setVariant = $variant ?? 'primary';
    $setVariantType = $variantType ?? 'normal';
    $setSize = $size ?? 'normal';
    $setName = $name ?? 'submitButton';
    $setRounded = $rounded ?? 'medium';
    $setClasses = 'base-button inline-flex align-middle align-items-center justify-center font-medium focus:outline-none';

    // if($setVariant === 'primary') {
    //     $setClasses.=" text-white bg-blue-500 hover:bg-blue-600";
    // } 
    // if($setVariant === 'secondary') {
    //     $setClasses.=" text-gray-600 bg-gray-200 hover:bg-gray-400 hover:text-gray-700";
    // }  
    if($setRounded === 'medium') {
        $setClasses.=" rounded-lg";
    } 
    if($setRounded === 'large') {
        $setClasses.=" rounded-full";
    }  
    if($setSize =='normal') {
        $setClasses.=" px-6 py-3";
    } 
    if($setSize =='small') {
        $setClasses.=" px-4 py-2";
    } 
    if($setVariant === 'success' && $setVariantType =='normal') {
        $setClasses.=" border-2 border-green-600 bg-green-600 hover:bg-green-700 hover:border-green-700 text-white";
    }  
    if($setVariant === 'primary' && $setVariantType =='normal') {
        $setClasses.=" border-2 border-blue-600 bg-blue-600 hover:bg-blue-700 hover:border-blue-700 text-white";
    }   
    if($setVariant === 'danger' && $setVariantType =='normal') {
        $setClasses.=" border-2 border-red-600 bg-red-600 hover:bg-red-700 hover:border-red-700 text-white";
    }   
    if($setVariant === 'warning' && $setVariantType =='normal') {
        $setClasses.=" border border-orange-600 bg-orange-600 hover:bg-orange-700 hover:border-orange-700 text-white";
    }   
    if($setVariant === 'white' && $setVariantType =='normal') {
        $setClasses.=" border-2 border-white bg-white bg-white text-blue-600 hover:text-blue-800";
    }    
    if($setVariant === 'success' && $setVariantType =='outline') {
        $setClasses.=" border-2 border-gray-200 text-green-500 hover:text-green-700";
    }   
    if($setVariant === 'primary' && $setVariantType =='outline') {
        $setClasses.=" border-2 border-gray-200 text-blue-500 hover:text-blue-700";
    }   
    if($setVariant === 'danger' && $setVariantType =='outline') {
        $setClasses.=" border-2 border-gray-200 text-red-500 hover:text-red-600";
    }  
    if($setVariant === 'secondary' && $setVariantType =='outline') {
        $setClasses.=" border-2 border-gray-300 text-gray-500 hover:text-blue-500";
    }  
@endphp
<div> 
    <button 
        type="{{ $setType }}" 
        class="{{$setClasses}}"
        name="{{ $setName }}" 
        {{ $attributes ?? '' }}>
        {{ $slot }}
    </button> 
</div>