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
    <title>Constructify</title>
    @vite('resources/css/app.css')
    <style>
        .cart-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            font-weight: bold;
            color: rgb(77, 134, 156);
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .cart-table th,
        .cart-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .cart-table th {
            background-color: #e3e3e3;
            color: rgb(77, 134, 156);
        }

        .product-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 4px;
        }

        .quantity-input {
            width: 50px;
            padding: 5px;
        }

        .remove-button {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .remove-button:hover {
            background-color: #ff1a1a;
        }

        .cart-total {
            text-align: right;
        }

        .cart-total h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .checkout-button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .checkout-button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body class="overflow-x-hidden font-plus-jakarta-sans">
    <x-navbar>
        <x-slot:menu1>Home</x-slot:menu1>
        <x-slot:menu2>Shop</x-slot:menu2>
        <x-slot:menu3>History</x-slot:menu3>
    </x-navbar>

    <div class="cart-container">
        <h1>Keranjang Barang</h1>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <tr>
                    <td><img src="../images/paku.jpeg" alt="Paku" class="product-image"></td>
                    <td>Barang 1</td>
                    <td>Rp 100,000</td>
                    <td><input type="number" value="1" class="quantity-input"></td>
                    <td>Rp 100,000</td>
                    <td><button class="remove-button">Hapus</button></td>
                </tr>
                <!-- Tambahkan baris barang lainnya di sini -->
            </tbody>
        </table>
        <div class="cart-total">
            <h2 id="total-amount">Total: Rp 100,000</h2>
            <button class="checkout-button" id="checkout-button">Lanjutkan Pembayaran</button>
        </div>
    </div>

    <script>
        document.getElementById('checkout-button').addEventListener('click', function () {
            window.location.href = '/payment';
        });

        document.querySelectorAll('.remove-button').forEach(function (button) {
            button.addEventListener('click', function () {
                const row = this.closest('tr');
                row.remove();
                updateTotal();
            });
        });

        function updateTotal() {
            let total = 0;
            document.querySelectorAll('.cart-table tbody tr').forEach(function (row) {
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
