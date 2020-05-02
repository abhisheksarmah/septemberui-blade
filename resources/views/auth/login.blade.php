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
                    {{ __("Don't have an account?") }}
                    <s-linkto href="{{route('register')}}">{{ __("Register Now") }}</s-linkto> 
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-md mx-auto w-full">
        <s-card> 
            <s-heading size='heading2' classes="mb-1 text-center">
                Welcome back
            </s-heading>  
            <s-heading size='small' classes="mb-6 text-center">
                Please enter your email and password to
                continue
            </s-heading>   
            <form 
                method="POST"
                action="{{ route('login') }}"
                onsubmit="
                    signInButton.disabled = true;
                    signInButton.classList.add('base-spinner');"
            >
                @csrf

                <s-input 
                    label='Email'
                    name='email'
                    type='email'
                    attributes='required' />  

                <s-input 
                    label='Password'
                    name='password'
                    type='password'
                    attributes='required' />   

                <s-button
                    name='signInButton'
                    type='submit'
                    classes='w-full'
                    >Sign In</s-button> 

                <div class="flex flex-wrap items-center"> 

                    @if (Route::has('password.request'))
                    <a
                    class="text-gray-500 hover:text-orange-700 block mt-4"
                        href="{{ route('password.request') }}"
                    >{{ __("Forgot Your Password?") }}</a> 
                    @endif
                </div>
            </form> 
        </s-card>

        <s-heading size='small' classes="text-center mt-4 text-sm" color="text-gray-500">
           Copyrights &copy; {{date('Y')}} {{ config('app.name', 'Laravel') }}
        </s-heading>
    </div>
</div>
@endsection
