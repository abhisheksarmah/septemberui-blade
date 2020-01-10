<div class="md:flex items-center justify-between bg-white shadow-sm px-4">
    <div class="flex flex-col" x-data="{ open: false }">
        <div class="flex flex-wrap justify-between md:flex-none items-center">
            <a href="/" class="inline-flex items-center font-bold text-xl">
                <img src="/logo.svg" alt="septemberui" width="100" title="September UI" />
            </a>
            <button
                @click="open = true"    
                class="inline-block inline-flex items-center justify-center w-8 py-3 rounded-full mr-2 cursor-pointer md:hidden"
            >
                <svg
                    class="fill-current text-gray-600"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                >
                    <path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z" />
                </svg>
            </button>
        </div>
        <div class="block md:hidden" x-show="open" @click.away="open = false">
            <a href="#" class="border-t px-2 py-3 block font-medium text-gray-600 hover:text-blue-500">Home</a>
            <a
                href="#"
                class="border-t px-2 py-3 block font-medium text-gray-600 hover:text-blue-500"
            >Search</a>
            <a
                href="#"
                class="border-t px-2 py-3 block font-medium text-gray-600 hover:text-blue-500"
            >Schedule</a>
            <a
                href="#"
                class="border-t px-2 py-3 block font-medium text-gray-600 hover:text-blue-500"
            >Events</a>
            <a
                href="#"
                class="border-t px-2 py-3 block font-medium text-gray-600 hover:text-blue-500"
            >Sign up</a>
            <a href="#" class="border-t px-2 py-3 block font-medium text-gray-600 hover:text-blue-500">Login</a>
        </div>
    </div>
    <div class="hidden md:block">
        <a
            href=""
            class="px-4 mr-3 py-5 inline-block font-medium active text-blue-600 hover:text-blue-600 {{Route::is('home') ?? 'active'}}"
        >Dashboard</a>
        <a
            href=""
            class="px-4 mr-3 py-5 inline-block font-medium text-gray-500 hover:text-blue-600"
        >Invoices</a>
        <a
            href="#"
            class="px-4 mr-3 py-5 inline-block font-medium text-gray-500 hover:text-blue-600"
        >Investments</a>
        <a href="#" class="px-4 py-5 inline-block font-medium text-gray-500 hover:text-blue-600">Notices</a>
    </div>
    <div class="hidden md:block">
        <div class="relative" x-data="{ open: false }">
            <button type="button" class="inline-block" @click="open = true">
                <span class="outline-none block inline-flex items-center justify-center h-10 w-10 overflow-hidden rounded-full shadow-inner">
                    <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=256&amp;q=80" alt="" class="h-full w-full object-cover">
                </span>
            </button> 
            <div class="block" x-show="open" @click.away="open = false">
                <div> 
                    <div class="absolute z-40 right-0">
                        <div class="mt-2 bg-white xl:border rounded-lg w-48 py-1 shadow-xl">
                            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Notifications</a> 
                            <a href="{{route('profile')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Profile &amp; Account</a> 
                            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Help &amp; Feedback</a> 
                            <div class="border-t my-1"></div> 
                            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Admin Panel</a> 
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf 
                                <button type="submit" class="w-full px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600 cursor-pointer text-left">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>