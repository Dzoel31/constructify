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
    <title>Constructify</title>
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden font-plus-jakarta-sans">
    <x-navbar>
        <x-slot name="menu1">Home</x-slot>
        <x-slot name="menu2">Shop</x-slot>
        <x-slot name="menu3">History</x-slot>
    </x-navbar>
    <div class="flex relative px-5 py-0">
        <div class="flex text-[#4D869C]">
            <h1 class="text-[24px] font-bold w-full"> {{ $title }} </h1>
        </div>
    </div>
    <div class="flex w-full px-3 justify-center items-center mt-3">
        <label for="search" class="block text-sm font-medium leading-6 text-gray-900">
            <div class="relative mt-2 rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <span class="text-gray-500 sm:text-sm"><i class="fas fa-search text-[14px]"></i></span>
                </div>
                <input type="text" name="search" id="search" class="block w-[600px] rounded-md border-0 py-1.5 px-8  pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#4D869C] focus:outline-none
                sm:text-sm sm:leading-6" placeholder="Search">
            </div>
        </label>
    </div>
    <div class="overflow-hidden flex flex-col justify-center items-center mt-5 px-5 py-0">
        <div class="flex justify-center items-center flex-col w-full">
            <div class="w-full flex justify-center items-center">
                <a href="/filter"> <img class="w-[200px] p-10" src="../images/kleppon-paint.png" alt="klepon paint"> </a>
                <a href="/filter"> <img class="w-[200px] p-10" src="../images/panas-risik.png" alt="panas risik"> </a>
                <a href="/filter"> <img class="w-[200px] p-10" src="../images/rotan.png" alt="rotan"> </a>
                <a href="/filter"> <img class="w-[200px] p-10" src="../images/pilek-led.png" alt="pilek led"> </a>
                <a href="/filter"> <img class="w-[200px] p-10" src="../images/duku.png" alt="duku"> </a>
            </div>
        </div>
        <div class="flex justify-center items-center flex-col w-full">
            <div class="w-full flex justify-center items-center">
                <img class="w-[200px] p-10" src="../images/kayu.jpg" alt="Kayu">
                <img class="w-[200px] p-10" src="../images/paku.jpeg" alt="paku">
                <img class="w-[200px] p-10" src="../images/toilet_seat.jpeg" alt="toilet">
                <img class="w-[200px] p-10" src="../images/metal_bars.jpeg" alt="besi">
                <img class="w-[200px] p-10" src="../images/pvc-pipe.jpg" alt="pipa">
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center flex-col w-full">
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h2 class="text-2xl font-bold tracking-tight text-[#7AB2B2]">Product</h2>
                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @foreach($data as $product)
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-40">
                            <img src="../images/{{ $product->image }}" alt=" {{ $product->name }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="/shop/{{ $product->name }}">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $product->name }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $product->unit }}</p>
                                <p class="mt-1 text-sm text-gray-500">{{ $product->description }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">Rp. {{ $product->price }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>