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
    <title>Constructify</title>
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden font-plus-jakarta-sans">
    <nav class="flex justify-between items-center px-0 py-2.5">
        <div class="text-[#4D869C] ml-5">
            <h2 class="font-bold text-xl ">Constructify</h2>
        </div>
        <div>
            <a class="text-[#4D869C] no-underline text-xl px-5 py-0 hover:text-black hover:trasition[-0.3s]" href="/">Home</a>
            <a class="text-[#4D869C] no-underline text-xl px-5 py-0 hover:text-black hover:trasition[-0.3s]" href="/belanja">Shop</a>
            <a class="text-[#4D869C] no-underline text-xl px-5 py-0 hover:text-black hover:trasition[-0.3s]" href="/history">History</a>
        </div>
        <div class="flex items-center mr-5">
            <a class="text-[#4D869C] no-underline text-xl px-5 py-0 hover:text-black hover:transition[-0.3s]" href="./user/basket.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <a class="text-[#4D869C] no-underline text-xl px-5 py-0 hover:text-black hover:transition[-0.3s]" href="/login.php"><i class="fa-regular fa-user"></i></a>
        </div>
    </nav>

    <div class="flex relative px-5 py-0">
        <div class="flex text-[#4D869C]">
            <h1 class="text-[24px] font-bold w-full">Shop</h1>
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
                <img class="w-[200px] p-10" src="../images/nippon-paint.jpg" alt="nippon paint">
                <img class="w-[200px] p-10" src="../images/panasonic.jpg" alt="panasonic">
                <img class="w-[200px] p-10" src="../images/sanjimas.jpg" alt="sanjimas">
                <img class="w-[200px] p-10" src="../images/philips.jpg" alt="philips">
                <img class="w-[200px] p-10" src="../images/modena.jpg" alt="modena">
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
    <footer class="text-black text-center absolute  w-full px-0 py-2.5 left-0 bottom-0">
        <p class="font-bold">Constructify &copy; 2024 </p>
    </footer>
</body>

</html>