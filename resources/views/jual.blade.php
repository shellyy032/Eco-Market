<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AddProduct - EcoMarket</title>
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
  <style>
    .add-product-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      width: 50%;
      margin: 2rem auto;
      padding: 2rem;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #f9f9f9;
    }
    .add-product-form label {
      font-weight: bold;
    }
    .add-product-form input,
    .add-product-form textarea,
    .add-product-form select {
      padding: 0.5rem;
      margin-bottom: 1rem;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }
    .btn {
      padding: 0.75rem 1.5rem;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <main>
    <h2 style="text-align: center;">Tambah Produk</h2>
    <form class="add-product-form" action="/submit-produk" method="POST" enctype="multipart/form-data">
      <label for="name">Nama Produk:</label>
      <input type="text" id="name" name="name" required>
      <label for="category">Kategori:</label>
      <input type="text" id="category" name="category" required>
      <label for="price">Harga:</label>
      <input type="number" id="price" name="price" required>
      <label for="images">Foto Produk:</label>
      <input type="file" id="images" name="images[]" multiple required>
      <label for="description">Deskripsi:</label>
      <textarea id="description" name="description" rows="4" required></textarea>
      <label for="stock">Stok:</label>
      <input type="number" id="stock" name="stock" required>
      <div class="button-group">
        <a href="/" class="btn">Kembali</a>
        <button type="submit" class="btn">Tambah Produk</button>
      </div>
    </form>
  </main>
</body>
</html>
