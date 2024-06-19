<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Constructify</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full overflow-x-hidden font-plus-jakarta-sans">
    <x-navbar></x-navbar>

    <div class="bg-cover w-full h-[350px] overflow-hidden" style="background-image: url('../images/construction.jpg');">
        <div class="backdrop-brightness-50 w-full min-h-[350px] text-white flex justify-center items-center flex-col">
            <h1 class="text-[52px] mb-2.5 ">Constructify</h1>
            <p>Build your dream with us</p>
            <button type="button" onclick="location.href='/shop'" class="btn btn-light my-4">Shop Now!</button>
        </div>
    </div>

    <div class="overflow-hidden flex flex-col justify-center items-center mt-5 px-5 py-0">
        <div class="flex justify-center items-center flex-col w-full">
            <h2 class="text-3xl font-bold text-[#7AB2B2]">Our Partners</h2>
            <div class="w-full flex justify-center items-center">
                <a href="/filter"> <img class="w-[200px] p-10" src="../images/kleppon-paint.png" alt="klepon paint"> </a>
                <a href="/filter"> <img class="w-[200px] p-10" src="../images/panas-risik.png" alt="panas risik"> </a>
                <a href="/filter"> <img class="w-[200px] p-10" src="../images/rotan.png" alt="rotan"> </a>
                <a href="/filter"> <img class="w-[200px] p-10" src="../images/pilek-led.png" alt="pilek led"> </a>
                <a href="/filter"> <img class="w-[200px] p-10" src="../images/duku.png" alt="duku"> </a>
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
    <x-footer></x-footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>