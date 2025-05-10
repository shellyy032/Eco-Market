<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk - EcoMarket</title>
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
  <style>
  .product-detail {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    padding: 2rem;
  }
  .product-detail img {
    max-width: 400px;
    width: 100%;
    border-radius: 12px;
    object-fit: cover;
  }
  .product-info {
    flex: 1;
  }
  .product-info h2 {
    margin-bottom: 1rem;
  }
  .product-info p {
    margin: 0.5rem 0;
  }
  .product-info .rating {
    margin-top: 1rem;
  }
  .rating span {
    color: gold;
    font-size: 1.2rem;
  }
  .product-actions {
    margin-top: 2rem;
  }
  .btn {
    padding: 0.75rem 1.5rem;
    margin-right: 1rem;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
  }
  .btn:hover {
    background-color: #45a049;
  }
  .product-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    margin-top: 1rem; 
  }
  .product-card {
    border: 1px solid #ddd;
    padding: 1rem;
    border-radius: 8px;
    width: 200px;
    text-align: center;
    transition: transform 0.3s ease;
  }
  .product-card:hover {
    transform: scale(1.05);
  }
  .product-card img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover;
  }
  .product-card h3 {
    margin: 1rem 0 0.5rem;
  }
  .product-card p {
    color: #4CAF50;
    font-weight: bold;
  }
  h4.section-title {
    margin-top: 1.5rem; 
    margin-bottom: 1rem; 
  }
  .notification {
    display: none;
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1rem;
    z-index: 1000;
  }
</style>

</head>
<body>

  <header>
    <div class="logo">
      <span>🍃</span> EcoMarket
    </div>
    <nav>
      <a href="/">Beranda</a>
      <a href="/produk">Produk</a>
      <a href="#">Artikel</a>
      <a href="#">Keranjang</a>
      <a href="/sell" class="btn">Tambah Produk</a>
      <button class="btn" id="profile-btn">Profil</button>
    </nav>
  </header>

  <main class="product-detail">
    <img src="https://via.placeholder.com/400" alt="Produk">
    
    <div class="product-info">
      <h2>Notebook dari Kertas Daur Ulang</h2>
      <p><strong>Harga:</strong> Rp 70.000</p>
      <p><strong>Stok:</strong> <span id="stock-count">20</span> pcs</p>
      <p><strong>Kategori:</strong> Kertas</p>
      <p><strong>Asal Bahan:</strong> Kertas bekas kantor</p>
      <p><strong>Proses Pembuatan:</strong> Dicacah, dicetak ulang, dan dijilid manual</p>
      <p><strong>Ukuran:</strong> A5 (14.8 x 21 cm)</p>
      <p><strong>Kondisi:</strong> Baru dan ramah lingkungan</p>

      <div class="rating">
        <strong>Penilaian:</strong>
        <span>⭐⭐⭐⭐☆</span> (4/5)
      </div>

      <div class="product-actions">
        <button class="btn" id="add-to-cart">Tambah ke Keranjang</button>
        <button class="btn" id="buy-now">Beli Sekarang</button>
      </div>
    </div>
  </main>

  <h4 class="section-title">Produk Terkait dari Toko Ini</h4>
  <div class="product-cards">
    <div class="product-card">
      <img src="https://via.placeholder.com/200" alt="Produk 1">
      <h3>Notebook Kertas Daur Ulang</h3>
      <p>Rp 60.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/200" alt="Produk 2">
      <h3>Alat Tulis Ramah Lingkungan</h3>
      <p>Rp 35.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/200" alt="Produk 3">
      <h3>Spidol Daur Ulang</h3>
      <p>Rp 25.000</p>
    </div>
  </div>

  <h4 class="section-title">Produk Toko Lainnya</h4>
  <div class="product-cards">
    <div class="product-card">
      <img src="https://via.placeholder.com/200" alt="Produk 4">
      <h3>Eco-Friendly Bag</h3>
      <p>Rp 90.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/200" alt="Produk 5">
      <h3>Reusable Water Bottle</h3>
      <p>Rp 50.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/200" alt="Produk 6">
      <h3>Eco Notebook</h3>
      <p>Rp 55.000</p>
    </div>
  </div>

  <div class="notification" id="notification">
    Produk telah ditambahkan ke keranjang!
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const addToCartBtn = document.getElementById('add-to-cart');
      const buyNowBtn = document.getElementById('buy-now');
      const stockCount = document.getElementById('stock-count');
      const notification = document.getElementById('notification');
      let stock = 20;

      addToCartBtn.addEventListener('click', function () {
        if (stock > 0) {
          stock--;
          stockCount.textContent = stock;
          showNotification("Produk telah ditambahkan ke keranjang!");
        } else {
          showNotification("Stok habis!", true);
        }
      });

      function showNotification(message, isError = false) {
        notification.textContent = message;
        notification.style.backgroundColor = isError ? '#f44336' : '#4CAF50';
        notification.style.display = 'block';
        setTimeout(function() {
          notification.style.display = 'none';
        }, 3000);
      }
    });
  </script>

  <script src="{{ asset('js/homepage.js') }}"></script>
</body>
</html>
