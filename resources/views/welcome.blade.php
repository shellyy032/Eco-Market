<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoMarket</title>
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
  <style>
    .hidden-section {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .show-section {
      opacity: 1;
      transform: translateY(0);
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
      <a href="/product">Produk</a> 
      <a href="#">Article</a>
      <a href="/cart">Cart</a>
      <a href="/sell" class="btn">Tambah Produk</a>
      <button class="btn" id="profile-btn">Profil</button>
    </nav>

  </header>

  <section class="hero">
    <img src="#" alt="Recycle Icon">
    <h1>JOIN THE ZERO WASTE MOVEMENT</h1>
  </section>

  <h2 class="section-title">Produk Terbaru</h2>
  <div class="product-grid">
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Bascom">
      <p><strong>Bascom dari Plastik Daur Ulang</strong><br>Rp 30.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Notebook">
      <p><strong>Notebook dari Kertas Daur Ulang</strong><br>Rp 70.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Bascom">
      <p><strong>Bascom dari Plastik Daur Ulang</strong><br>Rp 30.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Notebook">
      <p><strong>Notebook dari Kertas Daur Ulang</strong><br>Rp 70.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Bascom">
      <p><strong>Bascom dari Plastik Daur Ulang</strong><br>Rp 30.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Notebook">
      <p><strong>Notebook dari Kertas Daur Ulang</strong><br>Rp 70.000</p>
    </div>
  </div>

  <div id="product-modal" class="modal">
    <div class="modal-content">
      <span class="modal-close" id="modal-close">&times;</span>
      <h2 id="modal-title"></h2>
      <p id="modal-description"></p>
    </div>
  </div>
  <button id="scroll-to-top" onclick="scrollToTop()">↑</button>
  <script src="{{ asset('js/homepage.js') }}"></script>

  <h2 class="section-title">Produk Terpopuler</h2>
  <div class="product-grid">
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Kamera">
      <p><strong>Kamera Digital</strong><br>Rp 500.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Kompos">
      <p><strong>Kompos</strong><br>Rp 20.000</p>
      <p class="stars">★★★★★</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Kamera">
      <p><strong>Kamera Digital</strong><br>Rp 500.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Kompos">
      <p><strong>Kompos</strong><br>Rp 20.000</p>
      <p class="stars">★★★★★</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Kamera">
      <p><strong>Kamera Digital</strong><br>Rp 500.000</p>
    </div>
    <div class="product-card">
      <img src="https://via.placeholder.com/150" alt="Kompos">
      <p><strong>Kompos</strong><br>Rp 20.000</p>
      <p class="stars">★★★★★</p>
    </div>
  </div>

  <h2 class="section-title">Artikel Terkait Daur Ulang</h2>
  <div class="article-section">
    <div class="article-img">
      <img src="https://via.placeholder.com/300x150" alt="Artikel">
    </div>
    <div class="article-text">
      <h3>Tips untuk Gaya Hidup Bebas Sampah</h3>
      <p>Cara mendaur ulang dan langkah hidup lebih ramah lingkungan.</p>
      <button class="btn" id="lanjut-btn">Lanjutkan baca</button>
    </div>
  </div>

  <div class="testimonial">
    <h2>Testimoni Pengguna</h2>
    <p><strong>Adit</strong>: Saya sangat puas dengan pengalaman berbelanja di EcoMarket: Produk berkualitas dan ramah lingkungan.</p>
  </div>

  <script src="{{ asset('js/homepage.js') }}"></script>
</body>
</html>
