<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Desa Kaliprau</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link rel="stylesheet" href="frontend/styles/style.css">
   <script src="https://kit.fontawesome.com/e004402e47.js" crossorigin="anonymous"></script>
</head>

<body>
   {{-- Navbar  start --}}
   <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary" style="background-color: transparent !important;">
      <div class="container">
         <a class="navbar-brand" href="{{ route('home') }}">
            <img src="frontend/images/kaliprau.png" height="30">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-link active" aria-current="page" href="{{ route('home') }}" style="color: white">Home</a>
               <a class="nav-link" href="{{ route('wisata') }}" style="color: white">Wisata</a>
               <a class="nav-link" href="{{ route('makanan') }}" style="color: white">Makanan</a>
               <a class="nav-link" href="{{ route('produk') }}" style="color: white">Produk</a>
               <a class="nav-link" href="{{ route('admin') }} "style="color: white">Admin</a>

            </div>
         </div>
      </div>
   </nav>
   {{-- Navbar End --}}

   {{-- header --}}
   <header>
      <div class="container">
         <h1 style="font-weight: 700" class="text-header">
            Selamat Datang di
            <br />
            Desa wisata
            <br>
            Kaliprau
         </h1>
         <a href="#about" class="gradient-button mt-3">Jelajahi</a>
      </div>

   </header>

   {{-- section about --}}
   <section class="section-about" id="about">
      <div class="container">
         <h2 class="text-center mt-4 mb-5 title">Kaliprau, Ulujami, Pemalang</h2>
         <div class="row justify-content-around" style="margin-top: 80px">
            <div class="col-lg-5 col-md-12">
               <p style="text-align: justify;">
                  <b>Kaliprau</b> terletak di Kecamatan Ulujami, Kabupaten Pemalang, Jawa Tengah. Menurut cerita yang
                  Pekerjaan utama penduduk Desa Kaliprau adalah bertani. Hasil pertanian yang utama adalah padi dan
                  melati. Akhir-akhir ini banyak penduduk Desa Kaliprau yang alih profesi menjadi pengusaha konveksi.
                  Alih profesi ini didorong oleh suksesnya para pengusaha konveksi di desa tetangga terutama Desa
                  Rowosari dan Desa Samong.
               </p>
               <a href="{{ route('profileDesa') }}" class="gradient-button mt-3 mb-5" role="button">Detail</a>
               {{-- <a href="#about" class="about-btn">Batas Wilayah <i class="bx bx-chevron-right"></i></a> --}}
            </div>
            <div class="col-lg-5 col-md-12">
               <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31690.671973530945!2d109.54984438237977!3d-6.850507451860065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7027ffc2ceadef%3A0x5027a76e35651a0!2sKaliprahu%2C%20Kaliprau%2C%20Ulujami%2C%20Pemalang%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1690388855936!5m2!1sen!2sid"
                  width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
      </div>
   </section>

   {{-- section galeri --}}
   <section id="galeri" class="section-galeri">
      <div class="container">
         <div class="text-center">
            <h2 class="title mb-5">Galeri</h2>
         </div>
         <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4">
               <div class="mx-auto image-container">
                  <img src="frontend/images/galeri/pantai_kaliprau.jpg" class="image">
                  <div class="text-overlay">
                     <h5>Pantai Indah Kaliprau</h5>
                     <p>Utara Kaliprau</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
               <div class="mx-auto image-container">
                  <img src="frontend/images/galeri/sawah.jpeg" class="image">
                  <div class="text-overlay">
                     <h5>Lahan Padi</h5>
                     <p>Sekitar Kaliprau</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
               <div class="mx-auto image-container">
                  <img src="frontend/images/galeri/pantai.jpeg" class="image">
                  <div class="text-overlay">
                     <h5>Pantai Kaliprau</h5>
                     <p>Utara Kaliprau</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
               <div class="mx-auto image-container">
                  <img src="frontend/images/galeri/pasar_malam.jpg" class="image">
                  <div class="text-overlay">
                     <h5>Pasar Malam</h5>
                     <p>Gapura</p>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </section>
   {{-- section Jelajah --}}
   <section id="explore" class="section-jelajahi">
      <div class="container pt-5">
         <h2 class="text-center mb-2 title">Jelajahi Sekarang</h2>
         <p class="text-center">Temukan hal menarik dan mempesona lainnya di desa kaliprau</p>
         <div class="row mt-5 justify-content-center">
            <div class=" col-lg-4 col-md-6 mb-4 d-flex">
               <a href="{{ route('wisata') }}" class="mx-auto card pt-2 justify-content-center ml-5 "
                  style="width: 250px; height: 250px;">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center">
                     <img class="img-menu mb-5" src="frontend/images/island.png" alt="">
                     <p class="text-menu mb-0"
                        style="position: absolute; bottom: 20px; left: 0; right: 0; text-align: center;">
                        Wisata</p>
                  </div>
               </a>
            </div>
            <div class=" col-lg-4 col-md-6 mb-4 d-flex ">
               <a href="{{ route('makanan') }}" class="mx-auto card pt-2 justify-content-center"
                  style="width: 250px; height: 250px;">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center">
                     <img class="img-menu mb-5" src="frontend/images/makananan.png" alt="">
                     <p class="text-menu mb-0"
                        style="position: absolute; bottom: 20px; left: 0; right: 0; text-align: center;">
                        Tempat Makan
                     </p>
                  </div>
               </a>
            </div>
            <div class=" col-lg-4 col-md-6 mb-4 ">
               <a href="{{ route('produk') }}" class="mx-auto card pt-2 justify-content-end mr-5"
                  style="width: 250px; height: 250px;">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center">
                     <img class="img-menu mb-5" src="frontend/images/cart.png" alt="">
                     <p class="text-menu mb-0"
                        style="position: absolute; bottom: 20px; left: 0; right: 0; text-align: center;">
                        Produk Lokal
                     </p>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </section>

   <footer class="section-footer mb-4 border-top">
      <div class="container-fluid">
         <div class="row border-top justify-content-center align-items-center pt-4">
            <div class="col-auto text-gray-500 font-weight-light">2023 Copyright KKN TIM II UNDIP 2023 • All
               rights
               reserved • Made in
               Pemalang</div>
         </div>
      </div>
   </footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- Letakkan kode JavaScript di bawah ini -->
   <script>
      // Fungsi untuk menambahkan kelas aktif pada menu saat di-scroll
      $(window).on("scroll", function() {
         var scrollDistance = $(window).scrollTop();
         $(".section").each(function(i) {
            if ($(this).position().top <= scrollDistance) {
               $(".navbar-nav .nav-link").removeClass("active");
               $(".navbar-nav .nav-link").eq(i).addClass("active");
            }
         });
      });

      // Fungsi untuk menambahkan kelas aktif pada menu saat tautan diklik
      $(".navbar-nav .nav-link").on("click", function() {
         $(".navbar-nav .nav-link").removeClass("active");
         $(this).addClass("active");
      });
   </script>

</body>

</html>
