<div 
	class="shadow w-full rounded-lg bg-white overflow-hidden w-full block {{$classes ?? ''}}" 
    >
        @if (isset($withHeader) && $withHeader == true)
		<div
			class="card-header border-0 flex items-center justify-between px-8 py-3 bg-gray-100" 
		>
			<div class="text-truncate">
				{{$header}}
			</div>
			<div>
				{{$headerAction ?? ''}}
			</div>
		</div>
        @endif

		<div class="{{$isPadding ?? 'px-8 py-6'}}">
			{{ $slot }}
		</div>
        @if (isset($withFooter) && $withFooter == true)
		<div class="px-8 py-3 bg-gray-100">
			{{$footer}}
        </div>
        @endif
</div>