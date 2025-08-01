<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Susu Murni D'susu</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <meta name="google-site-verification" content="p4LnLK8xOXKKNxaK-VvemHDkhF_9k9GsjejX6jdRmGY" />
  <meta name="google-site-verification" content="google-site-verification: googleb8c25eb679e7a1c6.html" />

</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">Susu<span>Murni</span></div>
    <button class="menu-toggle" onclick="toggleMenu()">☰</button>
    <nav id="navbar">
      <ul>
        <li><a href="index.html">Beranda</a></li>
        <li><a href="#Beranda">Tentang</a></li>
        <li><a href="#katalog">Katalog</a></li>
        <li><a href="#lokasi">Lokasi</a></li>
        
        <?php if (isset($_SESSION['login'])): ?>
      <li><a href="logout.php">Logout</a></li>
    <?php endif; ?>
    
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <h1>FEEL FRESH!<br>THE <span class="highlight">PURE GOODNESS</span> IS WAITING FOR YOU</h1>
      <p>Start your day with a glass of 100% pure milk from local farms. Nutritious, fresh, and higienis.</p>
      <p>Available in various flavors and sizes to suit your taste.</p>
      <p><strong>Jam Buka:</strong> 14.00 WIB - 22.00 WIB</p>
    </div>
    <div class="hero-image">
      <img src="logo.png" alt="Logo Susu Murni" />
      <div class="card susu">susu murni</div>
      <div class="card alami">alami</div>
      <div class="card higienis">higienis</div>
      <div class="card segar">segar</div>
    </div>
  </section>

  <section id="Beranda"></section>
  <div class="Beranda">
    <h2>Tentang Susu Murni D'susu</h2>
    <p>Susu murni adalah susu segar yang diperoleh langsung dari perahan sapi tanpa melalui proses penghilangan lemak atau pencampuran bahan tambahan.
     Inilah yang membuatnya lebih kaya rasa, lebih bergizi, dan lebih alami dibandingkan susu olahan biasa.
      Susu murni kami diperah setiap hari dari sapi-sapi pilihan yang dipelihara dengan standar kebersihan dan kesehatan tinggi.
       Setelah diperah, susu langsung diproses dengan metode pasteurisasi ringan untuk menjaga kemurniannya sekaligus memastikan tetap aman dikonsumsi.
        Kami tidak menambahkan bahan pengawet, pewarna, atau pemanis buatan hanya 100% susu segar alami.
      Dengan kandungan kalsium, protein, serta vitamin yang tinggi, susu murni sangat baik untuk pertumbuhan tulang, meningkatkan daya tahan tubuh, dan menjaga energi harian Anda.
       Cocok dikonsumsi oleh anak-anak, remaja, hingga orang dewasa.</p>
       </div>


      <section id="katalog">
        <h2>Daftar Menu</h2>
        <div class="produk">
          <!-- Sumur Series -->
          <div class="card-produk"><h3>Sumur Tawar</h3><p>Harga: 5k</p></div>
          <div class="card-produk"><h3>Sumur Manis</h3><p>Harga: 6k</p></div>
          <div class="card-produk"><h3>Sumur Vanilla</h3><p>Harga: 6k</p></div>
          <div class="card-produk"><h3>Sumur Anggur</h3><p>Harga: 6k</p></div>
          <div class="card-produk"><h3>Sumur Melon</h3><p>Harga: 6k</p></div>
          <div class="card-produk"><h3>Sumur Stroberi</h3><p>Harga: 6k</p></div>
          <div class="card-produk"><h3>Sumur Mocca</h3><p>Harga: 6k</p></div>
          <div class="card-produk"><h3>Sumur Greentea</h3><p>Harga: 6k</p></div>
          <div class="card-produk"><h3>Sumur Coklat</h3><p>Harga: 6k</p></div>
          <div class="card-produk"><h3>Sumur Madu</h3><p>Harga: 8k</p></div>
          <div class="card-produk"><h3>Sumur Jahe</h3><p>Harga: 8k</p></div>
          <div class="card-produk"><h3>Sumur Extra Joss</h3><p>Harga: 8k</p></div>
          <div class="card-produk"><h3>½ Liter Rasa</h3><p>Harga: 12k</p></div>
          <div class="card-produk"><h3>½ Liter Tawar</h3><p>Harga: 11k</p></div>
          <div class="card-produk"><h3>1 Liter Rasa</h3><p>Harga: 22k</p></div>
          <div class="card-produk"><h3>1 Liter Tawar</h3><p>Harga: 21k</p></div>
      
          <!-- Roti Bakar Kukus -->
          <div class="card-produk"><h3>Roti Gula</h3><p>Harga: 6k</p></div>
          <div class="card-produk"><h3>Roti Susu</h3><p>Harga: 7k</p></div>
          <div class="card-produk"><h3>Roti Coklat</h3><p>Harga: 7k</p></div>
          <div class="card-produk"><h3>Roti Stroberi</h3><p>Harga: 7k</p></div>
          <div class="card-produk"><h3>Roti Kacang</h3><p>Harga: 7k</p></div>
          <div class="card-produk"><h3>Roti 2 Rasa</h3><p>Harga: 8k</p></div>
          <div class="card-produk"><h3>Roti 3 Rasa</h3><p>Harga: 9k</p></div>
          <div class="card-produk"><h3>Roti Keju</h3><p>Harga: 8k</p></div>
        </div>
      </section>

      <!-- ✨ Form Tambah Produk -->
<section id="form-produk" style="padding: 20px;">
  <h2>Tambah Produk Baru</h2>
  <form action="admin/create.php" method="POST">
    <input type="text" name="nama_produk" placeholder="Nama Produk" required>
    <input type="number" name="harga" placeholder="Harga (Rp)" required>
    <button type="submit">Simpan</button>
  </form>
</section>

<!-- ✨ Tampilkan Data Produk dari Database -->
<section id="data-produk" style="padding: 20px;">
  <h2>Data Produk Dinamis</h2>
  <?php include 'admin/read.php'; ?>
</section>

      <section class="ulasan-section">
        <h2>Ulasan Pelanggan</h2>
      
        <div class="ulasan-wrapper">
          <button id="prevBtn">←</button>
      
          <div class="ulasan-container" id="ulasanContainer">
            <div class="card-ulasan">"Susu murninya segar banget!"<br><strong>– Dina, Bandung</strong></div>
            <div class="card-ulasan">"Pelayanan ramah dan bersih."<br><strong>– Andi, Cimahi</strong></div>
            <div class="card-ulasan">"Langganan dari awal buka."<br><strong>– Rina, Sukajadi</strong></div>
            <!-- Tambahan ulasan lainnya -->
          </div>
      
          <button id="nextBtn">→</button>
        </div>
      </section>
      
      <section id="lokasi">
        <h2>Lokasi Kami</h2>
        <div style="width: 100%; height: 400px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3352.185392704898!2d107.5631581!3d-6.9221334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e51f9af4199f%3A0x605db7c983d72dd0!2sSusu%20murni%20%26%20roti%20bakar!5e1!3m2!1sid!2sid!4v1747492405169!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>

<!-- Tombol Scroll to Top -->
<button onclick="scrollToTop()" id="scrollTopBtn" title="Kembali ke atas">⬆</button>

  <!-- Tombol WhatsApp -->
      <a href="https://wa.me/6281234567890" class="whatsapp-button" target="_blank" title="Chat via WhatsApp">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon">
  </a>

    
  <!-- JavaScript -->
  <script src="main.js"></script>
</body>
</html>
