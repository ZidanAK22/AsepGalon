<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Produk</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
          body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
          }
      
          .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
          }
      
          .navbar {
            background-color: rgb(111, 186, 221);
            color: white;
          }
      
          .navbar-brand {
            font-size: 30px;
            font-weight: bold;
          }
      
          .navbar-brand .highlight1 {
            color: white;
          }
      
          .navbar-brand .highlight2 {
            color: rgb(255, 217, 0);
          }
      
          .navbar-nav .nav-link {
            color: white;
          }
      
          .navbar-brand {
            color: white;
            padding: 10px;
          }
      
          .footer {
            background-color: rgb(43, 40, 40);
            color: white;
            padding: 20px 0;
          }
      
          .footer-address p{
            margin-bottom: 0px;
            text-align: left;
          }
      
          .footer-social-icons {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-top: 0px;
            margin-bottom: 20px;
          }
      
          .footer-social-icons a {
            display:flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            color: rgb(43, 40, 40);
          }
      
        </style>
      </head>
      
      <body>
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand mr-auto" href="#">
              <span class="highlight1">Air</span>
              <span class="highlight2">Kita</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tentang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kontak</a>
                </li>
              </ul>
            </div>
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cari</button>
            </form>
          </div>
        </nav>
      
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-6">
              <img src="{{ $productImage }}" alt="Gambar Produk" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <h1>{{ $productName }}</h1>
              <p>Aqua Galon adalah produk air minum dalam kemasan galon yang diproduksi oleh Aqua, perusahaan air minum terkemuka di Indonesia. Aqua Galon menyediakan air minum berkualitas yang praktis dan mudah diakses bagi konsumen. Galon ini memiliki kapasitas yang cukup besar, biasanya sekitar 19 liter</p>
              <div class="row">
                <div class="col-lg-6">
                  <h4>Harga:</h4>
                  <p>{{ $productPrice }}</p>
                </div>
                <div class="col-lg-6">
                  <h4>Stok:</h4>
                  <p>10</p>
                </div>
              </div>
              <div class="form-group">
                <label for="quantity">Jumlah:</label>
                <input type="number" class="form-control form-control-sm" id="quantity" min="1" value="1">
              </div>
              <button class="btn btn-primary mb-2">Pesan Sekarang</button>
              <button class="btn btn-warning mb-2">Tambahkan ke Favorit</button>
              <hr>
              <h4>Spesifikasi:</h4>
              <ul>
                <li>Kapasitas: Aqua Galon memiliki kapasitas sekitar 19 liter, yang mencukupi kebutuhan air minum dalam jangka waktu tertentu.</li>
                <li>Bahan Kemasan: Galon Aqua terbuat dari bahan kemasan berkualitas tinggi yang aman dan tahan lama.</li>
                <li>Sistem Pengaman: Aqua Galon dilengkapi dengan segel pengaman yang memastikan kebersihan dan keaslian air minum di dalamnya.</li>
                <li>Air Berkualitas: Aqua Galon menyediakan air minum berkualitas tinggi dengan kandungan mineral yang baik untuk kesehatan tubuh.</li>
              </ul>
            </div>
          </div>
        </div>
      
        <footer class="footer">
          <div class="container">
            <p class="footer-address">Jl. Diponegoro No. 45
              Kelurahan Cihapit
              Kecamatan Bandung Wetan
              Kota Bandung
              Provinsi Jawa Barat
              Indonesia</p>
          </div>
            <div class="footer-social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </footer>
      
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
      </body>
</x-app-layout>
