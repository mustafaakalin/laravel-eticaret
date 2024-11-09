<!-- Extend the base layout -->
@extends('app')

<!-- Main container -->
<div class="container mx-auto p-4 md:p-6 lg:p-8">
    <!-- Header -->
    <h1 class="text-3xl font-bold underline mb-4">
        {{ config('app.name') }}
    </h1>

    <!-- Product grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Product card 1 -->
        <div class="bg-white rounded shadow-md p-4">
            <img src="image1.jpg" alt="Product 1" class="w-full h-48 object-cover mb-4">
            <h2 class="text-lg font-bold mb-2">Product 1</h2>
            <p class="text-gray-600">Description of product 1</p>
            <p class="text-lg font-bold text-red-600 mb-4">₺ 99,99</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buy Now</button>
        </div>

        <!-- Product card 2 -->
        <div class="bg-white rounded shadow-md p-4">
            <img src="image2.jpg" alt="Product 2" class="w-full h-48 object-cover mb-4">
            <h2 class="text-lg font-bold mb-2">Product 2</h2>
            <p class="text-gray-600">Description of product 2</p>
            <p class="text-lg font-bold text-red-600 mb-4">₺ 149,99</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buy Now</button>
        </div>

        <!-- Product card 3 -->
        <div class="bg-white rounded shadow-md p-4">
            <img src="image3.jpg" alt="Product 3" class="w-full h-48 object-cover mb-4">
            <h2 class="text-lg font-bold mb-2">Product 3</h2>
            <p class="text-gray-600">Description of product 3</p>
            <p class="text-lg font-bold text-red-600 mb-4">₺ 199,99</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buy Now</button>
        </div>

        <!-- Product card 4 -->
        <div class="bg-white rounded shadow-md p-4">
            <img src="image4.jpg" alt="Product 4" class="w-full h-48 object-cover mb-4">
            <h2 class="text-lg font-bold mb-2">Product 4</h2>
            <p class="text-gray-600">Description of product 4</p>
            <p class="text-lg font-bold text-red-600 mb-4">₺ 249,99</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buy Now</button>
        </div>

        <!-- Add more product cards as needed -->
    </div>
</div>
