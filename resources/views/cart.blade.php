<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Keranjang - EcoMarket</title>
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
  <style>
    .cart-container {
      width: 80%;
      margin: 2rem auto;
      padding: 2rem;
      background-color: #f9f9f9;
      border-radius: 8px;
    }
    .cart-item {
      display: flex;
      align-items: center;
      border-bottom: 1px solid #ddd;
      padding: 1rem 0;
    }
    .cart-item img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 8px;
    }
    .cart-details {
      flex: 1;
      margin-left: 1rem;
    }
    .cart-total {
      text-align: right;
      font-size: 1.2rem;
      font-weight: bold;
      margin-top: 1rem;
    }
    .btn {
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      background-color: #4CAF50;
      color: white;
    }
    .btn-danger {
      background-color: #f44336;
    }
    .checkout-section {
      margin-top: 2rem;
    }
    .checkout-section h3 {
      margin-bottom: 1rem;
    }
    .checkout-section label {
      margin-right: 1rem;
    }
  </style>
</head>
<body>
  <main class="cart-container">
    <h2>Keranjang Belanja</h2>
    <div id="cart-items">
      <div class="cart-item" data-price="30000">
        <input type="checkbox" class="select-product" onchange="updateTotal()">
        <img src="https://via.placeholder.com/80" alt="Produk 1">
        <div class="cart-details">
          <p><strong>Bascom Daur Ulang</strong></p>
          <p>Harga: Rp 30.000</p>
        </div>
        <button class="btn btn-danger" onclick="removeItem(this)">Hapus</button>
      </div>
      <div class="cart-item" data-price="70000">
        <input type="checkbox" class="select-product" onchange="updateTotal()">
        <img src="https://via.placeholder.com/80" alt="Produk 2">
        <div class="cart-details">
          <p><strong>Notebook Daur Ulang</strong></p>
          <p>Harga: Rp 70.000</p>
        </div>
        <button class="btn btn-danger" onclick="removeItem(this)">Hapus</button>
      </div>
    </div>
    <div class="cart-total" id="total-harga">
      Total: Rp 0
    </div>
    <div style="margin-top: 1.5rem; text-align: right;">
      <button class="btn" onclick="window.location.href='/cekot'">Checkout</button>
    </div>
  </main>
  <script>
    function formatRupiah(angka) {
      return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }
    function updateTotal() {
      const items = document.querySelectorAll('.cart-item');
      let total = 0;
      items.forEach(item => {
        const checkbox = item.querySelector('.select-product');
        if (checkbox.checked) {
          total += parseInt(item.getAttribute('data-price'));
        }
      });
      document.getElementById('total-harga').innerText = `Total: ${formatRupiah(total)}`;
    }
    function removeItem(button) {
      const item = button.closest('.cart-item');
      item.remove();
      updateTotal();
    }
    document.addEventListener('DOMContentLoaded', updateTotal);
  </script>
</body>
</html>
