<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.6.2/dist/alpine.js" defer></script>

</head>
<body class="bg-gray-100 antialiased font-sans text-gray-600">
    <main class="flex w-100 flex-col min-h-screen" id="app">
        @include('partials.navbar.one.top')

        <div class="main flex-1">
			@yield('content')
        </div>
        {{-- <div class="px-4 lg:px-6 py-16" style="background: #26385D">
			<div class="container mx-auto">
				<div class="flex flex-wrap md:flex-1 -mx-4">
					<div class="w-1/2 md:w-1/3 px-4 mb-6">
						<heading class="mb-3" size="small-caps">Grab Your Event</heading>
						<inertia-link href="/about" class="block text-sm mb-2 hover:text-gray-500">About</inertia-link>

						<inertia-link
							href="/terms-of-services"
							class="block text-sm mb-2 hover:text-gray-500"
						>Terms of Services</inertia-link>
						<inertia-link
							href="/privacy-policy"
							class="block text-sm mb-2 hover:text-gray-500"
						>Privacy &amp; Policy</inertia-link>
						<!-- <inertia-link
                            href="/faq"
                            class="block text-sm mb-2 hover:text-gray-500"
						>Help</inertia-link>-->
					</div>

					<div class="w-1/2 md:w-1/3 px-4 mb-6">
						<heading class="mb-3" size="small-caps">Help</heading>
						<!-- <a
                            href="#"
                            class="block text-sm mb-2 hover:text-gray-500"
                            >Selling your tickets</a
						>-->
						<inertia-link href="/faq" class="block text-sm mb-2 hover:text-gray-500">FAQ</inertia-link>
						<inertia-link href="/contact-us" class="block text-sm mb-2 hover:text-gray-500">Contact us</inertia-link>
						<!-- <a
                            href="#"
                            class="block text-sm mb-2 hover:text-gray-500"
                            >Payment</a
                        >
                        <a
                            href="#"
                            class="block text-sm mb-2 hover:text-gray-500"
                            >Extra Service</a
						>-->
					</div>

					<!-- <div class="w-1/2 md:w-1/3 px-4 mb-6">
                        <heading class="mb-3" size="small-caps"
                            >Join us</heading
                        >
                        <a
                            href="#"
                            class="block text-sm mb-2 hover:text-gray-500"
                            >Discover</a
                        >
                        <a
                            href="#"
                            class="block text-sm mb-2 hover:text-gray-500"
                            >Sell Tickets</a
                        >
                        <a
                            href="#"
                            class="block text-sm mb-2 hover:text-gray-500"
                            >Buy Tickets</a
                        >
					</div>-->

					<div class="w-1/2 md:w-1/3 px-4 mb-6">
						<heading class="mb-3" size="small-caps">Get Connected</heading>
						<a href="https://www.facebook.com/grabyourevent" class="block text-sm mb-2 hover:text-gray-500">Facebook</a>
						<a href="https://twitter.com/grabyourevent" class="block text-sm mb-2 hover:text-gray-500">Twitter</a>
						<!-- <a href="#" class="block text-sm mb-2 hover:text-gray-500">Instagram</a> -->
					</div>
				</div>

				<div class="pt-8 border-t border-blue-900 text-sm md:flex md:justify-between">
					<div>&copy; 2019 Grab Your Event. All rights reserved.</div>
					<div>
						Made with
						<span class="text-red-600">&hearts;</span> in Guwahati
					</div>
				</div>
			</div>
		</div> --}}
    </main>
</body>
</html>
