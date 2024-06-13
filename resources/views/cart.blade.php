<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

@if(session('success'))
<div class="bg-green-500 text-white px-3 py-1 text-center">
    {{ session('success') }}
</div>
@endif

<body class="overflow-x-hidden font-plus-jakarta-sans">
    <x-navbar></x-navbar>
    <div class="max-w-[800px] bg-white shadow-[0_0_10px_rgba(0,0,0,0.1)] mx-auto p-5 rounded-lg">
        <h1>Keranjang Anda</h1>
        <table class="w-full mb-5 border-collapse">
            <thead>
                <tr>
                    <th class="text-left p-3 border-b[#ddd] border-b border-solid bg-[#e3e3e3] text-[rgb(77,134,156)">Gambar</th>
                    <th class="text-left p-3 border-b[#ddd] border-b border-solid bg-[#e3e3e3] text-[rgb(77,134,156)">Nama Barang</th>
                    <th class="text-left p-3 border-b[#ddd] border-b border-solid bg-[#e3e3e3] text-[rgb(77,134,156)">Harga</th>
                    <th class="text-left p-3 border-b[#ddd] border-b border-solid bg-[#e3e3e3] text-[rgb(77,134,156)">Jumlah</th>
                    <th class="text-left p-3 border-b[#ddd] border-b border-solid bg-[#e3e3e3] text-[rgb(77,134,156)">Total</th>
                    <th class="text-left p-3 border-b[#ddd] border-b border-solid bg-[#e3e3e3] text-[rgb(77,134,156)">Hapus</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                @foreach ($cartData as $cartItem)
                <tr>
                    <td class="text-left p-3 border-b-[#ddd] border-b border-solid"><img src="../images/{{ $cartItem->material->image }}" alt="{{ $cartItem->material->name }}" class="w-[50px] h-[50px] object-cover rounded"></td>
                    <td class="text-left p-3 border-b-[#ddd] border-b border-solid">{{ $cartItem->material->name }}</td>
                    <td class="text-left p-3 border-b-[#ddd] border-b border-solid">Rp {{ number_format($cartItem->material->price) }}</td>
                    <td class="text-left p-3 border-b-[#ddd] border-b border-solid"><input type="number" value="{{ $cartItem->quantity }}" class="w-12 p-1"></td>
                    <td class="text-left p-3 border-b-[#ddd] border-b border-solid">Rp {{ number_format($cartItem->total) }}</td>
                    <td class="text-left p-3 border-b-[#ddd] border-b border-solid">
                        <form action="{{ route('cart.removeFromCart', $cartItem->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="remove-button bg-[#ff4d4d] text-white cursor-pointer rounded transition-[background-color] duration-[0.3s] ease-[ease] px-3 py-2 border-[none] hover:bg-[#ff1a1a]">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <!-- Tambahkan baris barang lainnya di sini -->
            </tbody>
        </table>
        <div class="text-right">
            <h2 class="text-2xl text-[#333] m-0">Total: Rp {{ number_format($total) }}</h2>
            <button class="bg-[#4CAF50] text-white cursor-pointer rounded text-base transition-[background-color] duration-[0.3s] ease-[ease] px-5 py-3 border-[none] hover:bg-[#45a049]">Lanjutkan Pembayaran</button>
        </div>
    </div>

    <script>
        document.getElementById('checkout-button').addEventListener('click', function() {
            window.location.href = '/payment';
        });

        document.querySelectorAll('.remove-button').forEach(function(button) {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                row.remove();
                updateTotal();
            });
        });

        function updateTotal() {
            let total = 0;
            document.querySelectorAll('.cart-table tbody tr').forEach(function(row) {
                const price = parseFloat(row.cells[2].innerText.replace('Rp ', '').replace(',', ''));
                const quantity = parseInt(row.cells[3].querySelector('input').value);
                total += price * quantity;
            });
            document.getElementById('total-amount').innerText = 'Total: Rp ' + total.toLocaleString();
        }
    </script>
</body>
<x-footer></x-footer>

</html>