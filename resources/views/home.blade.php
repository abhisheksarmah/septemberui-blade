@extends('layouts.one.master')

@section('content')
    <div class="flex items-center py-10">
        <div class="md:w-1/2 md:mx-auto"> 
            @component('components.card', [
                'withHeader' => true,
                'classes' => 'mb-6'
            ])  
            @slot('header')
                @component('components.heading', [
                    'size' => 'large'
                ])
                Your Dashboard goes here
                @endcomponent 
            @endslot
            @component('components.alert', [
                    'size' => 'large'
                ])
                Please go through septemberui guidelines before you get started. Happy coding... :)
                @endcomponent
            @endcomponent 
        </div>
    </div>
@endsection
