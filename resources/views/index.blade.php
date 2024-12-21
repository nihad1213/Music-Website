@extends('layouts.app')

@section('title', 'Home Page: VinylVerse')

@section('content')
<div class="container mx-auto mt-8">
    <!-- Header for the section -->
    <div class="relative mb-4">
        <h2 class="text-xl font-bold text-white px-4 py-2 inline-block bg-purple-700 relative skew-x-[-12deg]">
            <span class="inline-block skew-x-[12deg]">This Week's Best-Selling</span>
        </h2>
    </div>
    
    <!-- Swiper container for music albums -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Example album cards -->
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+1" alt="Album 1" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 1</h3>
                    <p class="text-gray-600">Artist 1</p>
                    <p class="text-blue-700 font-bold mt-2">$12.99</p>
                </a>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+2" alt="Album 2" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 2</h3>
                    <p class="text-gray-600">Artist 2</p>
                    <p class="text-blue-700 font-bold mt-2">$14.99</p>
                </a>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+3" alt="Album 3" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 3</h3>
                    <p class="text-gray-600">Artist 3</p>
                    <p class="text-blue-700 font-bold mt-2">$9.99</p>
                </a>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+4" alt="Album 4" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 4</h3>
                    <p class="text-gray-600">Artist 4</p>
                    <p class="text-blue-700 font-bold mt-2">$15.99</p>
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
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+5" alt="Album 5" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 5</h3>
                    <p class="text-gray-600">Artist 5</p>
                    <p class="text-blue-700 font-bold mt-2">$18.99</p>
                </a>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+6" alt="Album 6" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 6</h3>
                    <p class="text-gray-600">Artist 6</p>
                    <p class="text-blue-700 font-bold mt-2">$19.99</p>
                </a>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+7" alt="Album 7" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 7</h3>
                    <p class="text-gray-600">Artist 7</p>
                    <p class="text-blue-700 font-bold mt-2">$20.99</p>
                </a>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+8" alt="Album 8" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold">Album Title 8</h3>
                    <p class="text-gray-600">Artist 8</p>
                    <p class="text-blue-700 font-bold mt-2">$22.99</p>
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
            <div class="swiper-slide bg-white rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+9" alt="Album 9" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold mb-2">Album Title 9</h3>
                    <p class="text-gray-600 mb-4">Artist 9</p>
                    <p class="text-gray-800 font-bold mb-4">Price: $12.99</p>
                </a>
            </div>

            <!-- Example album card 2 -->
            <div class="swiper-slide bg-white rounded-lg shadow-md p-4 cursor-pointer transform transition-all hover:scale-105">
                <a href="#">
                    <img src="https://via.placeholder.com/200x300?text=Album+10" alt="Album 10" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-lg font-semibold mb-2">Album Title 10</h3>
                    <p class="text-gray-600 mb-4">Artist 10</p>
                    <p class="text-gray-800 font-bold mb-4">Price: $14.99</p>
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
            autoplay: {
                delay: 2500,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    });
</script>
@endpush
