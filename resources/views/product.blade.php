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
            
        </style>
      </head>
        <body>
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
              </div>
              <div class="form-group">
                <label for="quantity">Jumlah:</label>
                <input type="number" class="form-control form-control-sm" id="quantity" min="1" value="1">
              </div>
              <button class="btn btn-primary mb-2">Add to cart</button>
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
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
      </body>
</x-app-layout>
