<nav class="bg-white p-4 shadow-lg">
    <div class="flex items-center justify-between max-w-screen-xl mx-auto">

        <!-- Logo part -->
        <div class="flex-shrink-0">
            <a href="/">
                <img src="" alt="logo" class="h-12 md:h-16">
            </a>
        </div>

        <!-- Search part -->
        <div class="hidden lg:flex flex-grow justify-center">
            <input type="search" name="search" class="border border-gray-300 rounded-full px-6 py-3 w-96 focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800 placeholder-gray-500 transition-all duration-200" placeholder="Search products, community, etc...">
        </div>

        <!-- Menu Items -->
        <div class="flex items-center space-x-8">
            <!-- Products part -->
            <div>
                <a href="" class="text-gray-800 text-lg font-semibold hover:text-purple-600 transition-colors duration-300">Products</a>
            </div>

            <!-- Community part -->
            <div>
                <a href="" class="text-gray-800 text-lg font-semibold hover:text-purple-600 transition-colors duration-300">Community</a>
            </div>

            <!-- Shopping cart part -->
            <div>
                <a href="" class="text-gray-800 text-lg hover:text-purple-600 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </a>
            </div>

            <!-- Login & Register Buttons -->
            <div class="flex items-center space-x-4">
                <!-- Login Button -->
                <a href="#" class="px-5 py-2 text-sm font-bold text-purple-500 border-2 border-purple-500 rounded-full shadow-md hover:bg-purple-500 hover:text-white hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                    Login
                </a>
            
                <!-- Register Button -->
                <a href="#" class="px-5 py-2 text-sm font-bold text-purple-500 border-2 border-purple-500 rounded-full shadow-md hover:bg-purple-500 hover:text-white hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                    Register
                </a>
            </div>
            

            <!-- Language Dropdown -->
            <div class="relative">
                <select name="language" class="text-gray-900 bg-white border border-gray-300 rounded-full px-6 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 hover:bg-purple-50 transition-all duration-200">
                    <option value="en" class="flex items-center">
                        🇬🇧 ENG
                    </option>
                    <option value="es" class="flex items-center">
                        🇪🇸 ESP
                    </option>
                    <option value="fr" class="flex items-center">
                        🇫🇷 FR
                    </option>
                    <option value="de" class="flex items-center">
                        🇩🇪 DE
                    </option>
                </select>
            </div>
        </div>
    </div>
</nav>
