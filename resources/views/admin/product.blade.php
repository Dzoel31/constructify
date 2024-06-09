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

<body class="overflow-x-hidden font-plus-jakarta-sans h-full">
    <x-admin-navbar></x-admin-navbar>

    <header class="bg-gray-100 py-5">
        <div class="container mx-auto px-3 h-5 flex items-center">
            <h1 class="text-2xl font-bold text-gray-800">Product</h1>
        </div>
    </header>

    @if (session('success'))
    <div class="bg-green-500 text-white px-3 py-1 text-center">
        {{ session('success') }}
    </div>
    @endif

    <div class="container mx-auto px-3" x-data=" { isClicked: false }">
        <div class="flex justify-between items-center mt-5">
            <h2 class="text-xl font-bold text-gray-800">Product List</h2>
            <button @click="isClicked = !isClicked" class="bg-blue-500 text-white px-3 py-1 rounded-md">Add Product</button>
        </div>
        <x-form-add-product :$dataCategory :$dataPartner>
        </x-form-add-product>
    </div>

    <div class="flex justify-center items-center flex-col w-full">
        <div class="container mx-auto px-3 mt-5">
            <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-2 py-2">Name</th>
                    <th class="px-2 py-2">Description</th>
                    <th class="px-2 py-2">Category</th>
                    <th class="px-2 py-2">Partner</th>
                    <th class="px-2 py-2">Image</th>
                    <th class="px-2 py-2">Price</th>
                    <th class="px-2 py-2">Stock</th>
                    <th class="px-2 py-2">Unit</th>
                    <th class="px-2 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataMaterial as $product)
                <tr>
                    <td class="border px-2 py-2">{{ $product->name }}</td>
                    <td class="border px-2 py-2">{{ $product->description }}</td>
                    <td class="border px-2 py-2">{{ $product->category->name }}</td>
                    <td class="border px-2 py-2">{{ $product->partner->name }}</td>
                    <td class="border px-2 py-2"><img src="../images/{{ $product->image }}" alt="{{ $product->name }}" class="w-20 h-20 object-cover"></td>
                    <td class="border px-2 py-2">{{ $product->price }}</td>
                    <td class="border px-2 py-2">{{ $product->stock }}</td>
                    <td class="border px-2 py-2">{{ $product->unit }}</td>
                    <td class="border px-2 py-2">
                        <form action="/admin/products/{{ $product->id }}/edit" method="GET" class="inline">
                            @csrf
                            <button type="submit" class="btn btn-primary my-4">Edit</button>
                        </form>
                        <form action="/admin/products/{{ $product->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger my-4">Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

    <x-footer></x-footer>
</body>

</html>