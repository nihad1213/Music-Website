@extends('layouts.app')

@section('title', 'Home Page: VinylVerse')

@section('content')
<div class="container mx-auto mt-8 px-4">
    <!-- Header for the section -->
    <div class="relative mb-4">
        <h2 class="text-xl font-bold text-white px-4 py-2 inline-block bg-purple-700 relative skew-x-[-12deg]">
            <span class="inline-block skew-x-[12deg]">This Week's Best-Selling</span>
        </h2>
    </div>

    <!-- Swiper container for music albums -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Single Album Card -->
            <div class="swiper-slide bg-white rounded-lg shadow-md p-4 cursor-pointer transition-all hover:scale-105 w-72 mx-2 flex flex-col">
                <a href="#" class="flex flex-col h-full">
                    <!-- Album Image Section -->
                    <div class="relative w-full">
                        <img src="https://via.placeholder.com/150x150" alt="Album 1" class="rounded-lg w-full h-48 object-cover mb-4">
                        <span class="absolute top-2 right-2 bg-purple-600 text-white text-xs px-2 py-1 rounded">New Release</span>
                    </div>  

                    <!-- Album Info Section -->
                    <div class="flex-grow space-y-2">
                        <h3 class="text-lg font-semibold line-clamp-1">Album Title 1</h3>
                        <p class="text-gray-600">Artist Name</p>

                        <!-- Price and Stock Status -->
                        <div class="flex items-center justify-between">
                            <p class="text-blue-700 font-bold">$12.99</p>
                            <span class="text-green-500 text-sm">In Stock</span>
                        </div>  

                        <!-- Additional Details -->
                        <div class="space-y-1 text-sm text-gray-500">
                            <p class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Release Date: 2024-12-15
                            </p>
                            <p class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                Genre: Rock
                            </p>
                            <p class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Duration: 45 mins
                            </p>
                            <p class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                </svg>
                                Tracks: 12
                            </p>

                            <p class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/>
                                    <circle cx="12" cy="12" r="7" stroke="currentColor" stroke-width="1.5"/>
                                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M12 2v4m0 12v4m10-12h-4m-12 0h-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                                <span>New Arrival</span>
                            </p>
                            
                        </div>  

                        <!-- Rating -->
                        <div class="flex items-center gap-1 mt-2">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <span class="text-sm text-gray-600 ml-1">4.5/5</span>
                            </div>
                        </div>  

                        <!-- Action Buttons -->
                        <div class="flex justify-between mt-4">
                            <!-- Add to Cart Button -->
                            <a href="#" class="px-5 py-2 text-sm font-bold text-purple-500 border-2 border-purple-500 rounded-full shadow-md hover:bg-purple-500 hover:text-white hover:shadow-lg transition-all duration-300 transform hover:scale-105 mx-auto block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add to Cart
                            </a>

                            <!-- Wishlist Button -->
                            <a href="#" class="px-5 py-2 text-sm font-bold text-purple-500 border-2 border-purple-500 rounded-full shadow-md hover:bg-purple-500 hover:text-white hover:shadow-lg transition-all duration-300 transform hover:scale-105 mx-auto block text-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                Wishlist
                            </a>
                        </div>
                    </div>
                </a>
            </div>              
        </div>
    </div>

    <!-- Header for the section -->
    <div class="relative mb-4">
        <h2 class="text-xl font-bold text-white px-4 py-2 inline-block bg-purple-700 relative skew-x-[-12deg]">
            <span class="inline-block skew-x-[12deg]">Best-Selling</span>
        </h2>
    </div>

    <!-- Swiper container for music albums -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Example album cards -->
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105 w-64 mx-2">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+5" alt="Album 5" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 5</h3>
                    <p class="text-gray-600">Artist 5</p>
                    <p class="text-blue-700 font-bold mt-2">$18.99</p>
                    <p class="text-sm text-gray-500 mt-1">Release Date: 2024-12-20</p>
                    <p class="text-sm text-gray-500 mt-1">Condition: New</p>
                    <div class="flex justify-between mt-4">
                        <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Add to Cart</button>
                        <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400">Add to Wishlist</button>
                    </div>
                </a>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105 w-64 mx-2">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+6" alt="Album 6" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 6</h3>
                    <p class="text-gray-600">Artist 6</p>
                    <p class="text-blue-700 font-bold mt-2">$19.99</p>
                    <p class="text-sm text-gray-500 mt-1">Release Date: 2024-12-18</p>
                    <p class="text-sm text-gray-500 mt-1">Condition: New</p>
                    <div class="flex justify-between mt-4">
                        <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Add to Cart</button>
                        <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400">Add to Wishlist</button>
                    </div>
                </a>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105 w-64 mx-2">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+7" alt="Album 7" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 7</h3>
                    <p class="text-gray-600">Artist 7</p>
                    <p class="text-blue-700 font-bold mt-2">$20.99</p>
                    <p class="text-sm text-gray-500 mt-1">Release Date: 2024-12-16</p>
                    <p class="text-sm text-gray-500 mt-1">Condition: New</p>
                    <div class="flex justify-between mt-4">
                        <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Add to Cart</button>
                        <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400">Add to Wishlist</button>
                    </div>
                </a>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105 w-64 mx-2">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+8" alt="Album 8" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 8</h3>
                    <p class="text-gray-600">Artist 8</p>
                    <p class="text-blue-700 font-bold mt-2">$22.99</p>
                    <p class="text-sm text-gray-500 mt-1">Release Date: 2024-12-14</p>
                    <p class="text-sm text-gray-500 mt-1">Condition: New</p>
                    <div class="flex justify-between mt-4">
                        <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Add to Cart</button>
                        <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400">Add to Wishlist</button>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Header for the section -->
    <div class="relative mb-4">
        <h2 class="text-xl font-bold text-white px-4 py-2 inline-block bg-purple-700 relative skew-x-[-12deg]">
            <span class="inline-block skew-x-[12deg]">This Week’s Most Collected</span>
        </h2>
    </div>

    <!-- Swiper container for music albums -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Example album cards -->
            <div class="swiper-slide bg-white rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105 w-64 mx-2">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+9" alt="Album 9" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold mb-2">Album Title 9</h3>
                    <p class="text-gray-600 mb-4">Artist 9</p>
                    <p class="text-gray-800 font-bold mb-4">Price: $12.99</p>
                    <p class="text-sm text-gray-500 mt-1">Release Date: 2024-12-12</p>
                    <p class="text-sm text-gray-500 mt-1">Condition: New</p>
                    <div class="flex justify-between mt-4">
                        <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Add to Cart</button>
                        <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400">Add to Wishlist</button>
                    </div>
                </a>
            </div>

            <!-- Example album card 2 -->
            <div class="swiper-slide bg-white rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105 w-64 mx-2">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+10" alt="Album 10" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold mb-2">Album Title 10</h3>
                    <p class="text-gray-600 mb-4">Artist 10</p>
                    <p class="text-gray-800 font-bold mb-4">Price: $14.99</p>
                    <p class="text-sm text-gray-500 mt-1">Release Date: 2024-12-08</p>
                    <p class="text-sm text-gray-500 mt-1">Condition: New</p>
                    <div class="flex justify-between mt-4">
                        <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Add to Cart</button>
                        <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400">Add to Wishlist</button>
                    </div>
                </a>
            </div>
            <!-- More album cards go here... -->
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
        });
    });
</script>
@endpush
