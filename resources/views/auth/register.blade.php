@extends('layouts.one.app') @section('content')
<div class="relative px-4 lg:px-6 md:py-16 lg:py-24 bg-gray-100 h-screen flex items-center"> 
    <div class="absolute left-0 right-0 top-0 bg-white">
        <div class="container px-4 mx-auto py-6">
            <div class="flex items-center justify-between">
                <div>
                    <a href="/" class="py-2 md:py-0">
                        <div class="flex items-center">
                            <img src="/logo.svg" alt="gye" width="100" class="hidden md:block" />
                            <img src="/logo.svg" alt="gye" width="70" class="md:hidden" />

                            <span class="font-bold text-gray-700 text-lg md:text-xl ml-2">{{config('app.name')}}</span>
                        </div>
                    </a>
                </div>
                <div>
                    {{ __('Already have an account?') }}
                    @component('components.linkto', [
                        'href' => route('login')
                    ])
                        {{ __('Login') }}
                    @endcomponent 
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-4xl mx-auto w-full h-full"> 
        @component('components.card', [
            'padding' => false
        ])   
            <div class="flex">
                <div class="w-full md:w-1/2 p-10">
                    @component('components.heading', [
                        'size' => 'heading',
                        'classes' => "mb-5"
                    ])
                        Get started
                    @endcomponent  
                    <form  
                        method="POST"
                        action="{{ route('register') }}"
                        onsubmit="
                            registerButton.disabled = true;
                            registerButton.classList.add('base-spinner');"
                    >
                        @csrf

                        @component('components.input', [
                            'label' => 'Name',
                            'name' => 'name',
                            'attributes' => 'required'
                        ])  
                        @endcomponent

                        @component('components.input', [
                            'label' => 'Email',
                            'name' => 'email',
                            'type' => 'email',
                            'attributes' => 'required'
                        ])  
                        @endcomponent

                        @component('components.input', [
                            'label' => 'Password',
                            'name' => 'password',
                            'type' => 'password',
                            'attributes' => 'required'
                        ])   
                        @endcomponent 

                        @component('components.input', [
                            'label' => 'Confirm Password',
                            'name' => 'password_confirmation',
                            'type' => 'password',
                            'attributes' => 'required'
                        ])   
                        @endcomponent 

                        @component('components.alert', [ 
                            "variant" => "info",
                            "classes" => "my-6"
                        ])
                            By creating an account you agree to the
                            @component('components.linkto', [
                                'href' => '#'
                            ])
                                {{ __('Terms of Service') }}
                            @endcomponent &nbsp;and 
                            @component('components.linkto', [
                                'href' => '#'
                            ])
                                {{ __('Privacy Policy') }}
                            @endcomponent.
                        @endcomponent

                        @component('components.button', [
                            'name' => 'registerButton',
                            'type' => 'submit',
                            'classes' => 'w-full'
                        ])
                            Let's get started
                        @endcomponent 
                    </form>
                </div>
                <div class="hidden md:block flex-1 bg-gray-200">
                    <img src="https://jobsharbour.com/bg2.jpg" alt="bg" class="object-cover h-full w-full" />
                </div>
            </div>
            
        @endcomponent  

        @component('components.heading', [
            'size' => 'small',
            'classes' => "text-center mt-4 text-sm",
            'color' => 'text-gray-500'
        ])
            Copyrights &copy; {{date('Y')}} {{ config('app.name', 'Laravel') }}
        @endcomponent  
    </div> 
</div>
@endsection
