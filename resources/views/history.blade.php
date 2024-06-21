<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden font-plus-jakarta-sans">
    <x-navbar></x-navbar>
    <div class="max-w-[800px] bg-white shadow-[0_0_10px_rgba(0,0,0,0.1)] mx-auto p-5 rounded-lg">
        <h1>Status Pembelian Anda</h1>
        <ul role="list" class="divide-y divide-gray-100">
            @foreach ($detailOrders as $detail)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <div class="min-w-0 flex-auto">
                        <p class="text-xl font-semibold leading-6 text-gray-900">{{ $detail->material->name }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ \Carbon\Carbon::parse($detail->order->order_date)->locale('id')->isoFormat('LLL') }}</p>
                    </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">Rp {{ number_format($detail->total) }}</p>
                    <div class="mt-1 flex items-center gap-x-1.5">
                        @php
                        $status = $detail->order->status;
                        $statusColor = '';

                        switch ($status) {
                        case 'Pending':
                        $statusColor = 'bg-yellow-500';
                        break;
                        case 'Processing':
                        $statusColor = 'bg-emerald-500';
                        break;
                        case 'Delivered':
                        $statusColor = 'bg-blue-500';
                        break;
                        case 'Canceled':
                        $statusColor = 'bg-red-500';
                        break;
                        default:
                        $statusColor = 'bg-gray-500';
                        break;
                        }
                        @endphp

                        <div class="flex-none rounded-full {{ $statusColor }}/20 p-1">
                            <div class="h-1.5 w-1.5 rounded-full {{ $statusColor }}"></div>
                        </div>
                        <p class="text-xs leading-5 text-gray-500">{{ $status }}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <x-footer></x-footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>