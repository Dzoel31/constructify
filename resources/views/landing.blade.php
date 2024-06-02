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
            <a class="text-[#4D869C] no-underline text-xl px-5 py-0 hover:text-black hover:transition[-0.3s]" href="/login"><i class="fa-regular fa-user"></i></a>
        </div>
    </nav>

    <div class="bg-cover w-full h-[350px] overflow-hidden" style="background-image: url('../images/construction.jpg');">
        <div class="backdrop-brightness-50 w-full min-h-[350px] text-white flex justify-center items-center flex-col">
            <h1 class="text-[52px] mb-2.5 ">Constructify</h1>
            <p>Build your dream with us</p>
            <button type="button" class="btn btn-light my-4">Shop Now!</button>
        </div>
    </div>

    <div class="overflow-hidden flex flex-col justify-center items-center mt-5 px-5 py-0">
        <div class="flex justify-center items-center flex-col w-full">
            <h2 class="text-3xl font-bold text-[#7AB2B2]">Our Partners</h2>
            <div class="w-full flex justify-center items-center">
                <img class="w-[200px] p-10" src="../images/nippon-paint.jpg" alt="nippon paint">
                <img class="w-[200px] p-10" src="../images/panasonic.jpg" alt="panasonic">
                <img class="w-[200px] p-10" src="../images/sanjimas.jpg" alt="sanjimas">
                <img class="w-[200px] p-10" src="../images/philips.jpg" alt="philips">
                <img class="w-[200px] p-10" src="../images/modena.jpg" alt="modena">
            </div>
        </div>
        <div class="flex justify-center items-center flex-col w-full">
            <h2 class="text-3xl font-bold text-[#7AB2B2]">Materials</h2>
            <div class="w-full flex justify-center items-center">
                <img class="w-[200px] p-10" src="../images/kayu.jpg" alt="Kayu">
                <img class="w-[200px] p-10" src="../images/paku.jpeg" alt="paku">
                <img class="w-[200px] p-10" src="../images/toilet_seat.jpeg" alt="toilet">
                <img class="w-[200px] p-10" src="../images/metal_bars.jpeg" alt="besi">
                <img class="w-[200px] p-10" src="../images/pvc-pipe.jpg" alt="pipa">
            </div>
        </div>
    </div>
    <footer class="text-black text-center relative w-full px-0 py-2.5 left-0 bottom-0">
        <p class="font-bold">Constructify &copy; 2024 </p>
    </footer>
</body>

</html>