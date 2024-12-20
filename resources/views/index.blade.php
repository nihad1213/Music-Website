@extends('layouts.app')

@section('title', 'Home Page: VinylVerse')

@section('content')
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
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4">
                <img src="https://via.placeholder.com/200x300?text=Album+1" alt="Album 1" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold">Album Title 1</h3>
                <p class="text-gray-600">Artist 1</p>
                <p class="text-blue-700 font-bold mt-2">$12.99</p>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4">
                <img src="https://via.placeholder.com/200x300?text=Album+2" alt="Album 2" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold">Album Title 2</h3>
                <p class="text-gray-600">Artist 2</p>
                <p class="text-blue-700 font-bold mt-2">$14.99</p>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4">
                <img src="https://via.placeholder.com/200x300?text=Album+3" alt="Album 3" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold">Album Title 3</h3>
                <p class="text-gray-600">Artist 3</p>
                <p class="text-blue-700 font-bold mt-2">$9.99</p>
            </div>
            <div class="swiper-slide bg-gray-100 rounded-lg shadow-md p-4">
                <img src="https://via.placeholder.com/200x300?text=Album+4" alt="Album 4" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold">Album Title 4</h3>
                <p class="text-gray-600">Artist 4</p>
                <p class="text-blue-700 font-bold mt-2">$15.99</p>
            </div>
        </div>
        <!-- Swiper navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Swiper pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
@endsection

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 3,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
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