<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout - EcoMarket</title>
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
  <style>
    .checkout-container {
      width: 60%;
      margin: 2rem auto;
      padding: 2rem;
      background-color: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .checkout-container h2 {
      margin-bottom: 1.5rem;
      text-align: center;
    }
    .section {
      margin-bottom: 2rem;
    }
    .section h3 {
      margin-bottom: 0.5rem;
    }
    .product-summary {
      border-bottom: 1px solid #ccc;
      padding: 1rem 0;
    }
    .product-summary:last-child {
      border: none;
    }
    .form-group {
      margin-bottom: 1rem;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 0.3rem;
    }
    .form-group input, .form-group textarea, .form-group select {
      width: 100%;
      padding: 0.6rem;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    .total {
      font-size: 1.2rem;
      font-weight: bold;
      text-align: right;
    }
    .btn {
      padding: 0.75rem 1.5rem;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-right: 1rem;
    }
    .btn:hover {
      background-color: #45a049;
    }
    .btn-secondary {
      background-color: #aaa;
    }
  </style>
</head>
<body>

  <div class="checkout-container">
    <h2>Checkout</h2>

    <!-- Ringkasan Belanja -->
    <div class="section">
      <h3>Produk yang Dibeli</h3>
      <div class="product-summary">
        <p><strong>Notebook Daur Ulang</strong> - Rp 70.000</p>
      </div>
      <div class="product-summary">
        <p><strong>Botol Air Bekas</strong> - Rp 15.000</p>
      </div>
      <div class="total">
        Total: Rp 85.000
      </div>
    </div>

    <!-- Informasi Pembeli -->
    <div class="section">
      <h3>Informasi Pembeli</h3>
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat Pengiriman</label>
        <textarea id="alamat" name="alamat" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="telepon">Nomor Telepon</label>
        <input type="tel" id="telepon" name="telepon" required>
      </div>
    </div>

    <!-- Metode Pembayaran -->
    <div class="section">
      <h3>Metode Pembayaran</h3>
      <div class="form-group">
        <select name="payment_method" id="payment_method" required>
          <option value="">-- Pilih Metode --</option>
          <option value="cod">COD (Bayar di Tempat)</option>
          <option value="transfer">Transfer Bank</option>
        </select>
      </div>
    </div>

    <!-- Tombol Aksi -->
    <div style="text-align: right;">
      <button class="btn btn-secondary" onclick="window.location.href='/keranjang'">Kembali ke Keranjang</button>
      <button class="btn" onclick="checkout()">Konfirmasi & Bayar</button>
    </div>
  </div>

  <script>
    function checkout() {
      alert("Pesanan Anda telah dikonfirmasi!\nTerima kasih telah berbelanja di EcoMarket.");
      window.location.href = "/"; // Redirect ke halaman utama atau pesanan
    }
  </script>

</body>
</html>
