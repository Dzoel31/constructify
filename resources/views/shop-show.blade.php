<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden font-plus-jakarta-sans overflow-y-hidden">
    <x-navbar>
        <x-slot name="menu1">Home</x-slot>
        <x-slot name="menu2">Shop</x-slot>
        <x-slot name="menu3">History</x-slot>
    </x-navbar>

    <!-- <div class="flex items-center justify-center min-h-screen">
        <div class="group relative">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-40">
                <img src="../images/{{ $product->image }}" alt="{{ $product->name }}" class="object-cover h-full w-full">
            </div>
            <div class="mt-4 flex flex-col items-center">
                <h3 class="text-sm text-gray-700">
                    <a href="/shop/{{ $product->slug }}">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        {{ $product->name }}
                    </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">{{ $product->unit }}</p>
                <p class="mt-1 text-sm text-gray-500">{{ $product->description }}</p>
                <p class="text-sm font-medium text-gray-900">Rp. {{ $product->price }}</p>
            </div>
        </div>
    </div> -->

    <div class="flex items-center justify-center min-h-screen">
        <div class="max-w-5xl w-full p-4 bg-white shadow-md rounded-md">
            <div class="flex flex-col lg:flex-row items-start lg:items-center">
                <!-- Image Column -->
                <div class="lg:w-2/3  w-full flex justify-center lg:justify-start lg:mb-0">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 ">
                        <img src="../images/{{ $product->image }}" alt="{{ $product->name }}" class="object-cover h-full w-full">
                    </div>
                </div>
                <!-- Details Column -->
                <div class="lg:w-2/3  w-full flex justify-center flex-col ml-3 lg:justify-start lg:mb-0">
                    <h3 class="text-lg font-bold text-gray-700">
                        <a href="/shop/{{ $product->slug }}">
                            {{ $product->name }}
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">{{ $product->description }}</p>
                    <p class="mt-2 text-sm text-gray-500">Unit: {{ $product->unit }}</p>
                    <p class="mt-2 text-sm text-gray-500">Stock: {{ $product->stock }}</p>
                    <p class="mt-2 text-lg font-semibold text-gray-900">Rp. {{ $product->price }}</p>
                    <div class="mt-4">
                        <form action="{{ route('shop.addToCart', $product->id) }}" method="POST">
                            @csrf
                            <label for="quantity" class="text-sm text-gray-500">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" min="1" max="{{ $product->stock }}" value="1" class="w-16 p-2 border border-gray-300 rounded-md text-center">
                            <button class="ml-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>