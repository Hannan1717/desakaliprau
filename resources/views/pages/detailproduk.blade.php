<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ url('frontend/styles/style.css') }}">
   <script src="https://kit.fontawesome.com/e004402e47.js" crossorigin="anonymous"></script>
</head>

<body class="body-bg">
   {{-- Navbar  start --}}
   <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
      <div class="container">
         <a class="navbar-brand" href="#">
            <img src="{{ url('frontend/images/kaliprau.png') }}" height="30">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
               <a class="nav-link" href="{{ route('wisata') }}">Wisata</a>
               <a class="nav-link" href="{{ route('makanan') }}">Makanan</a>
               <a class="nav-link" href="{{ route('produk') }}">Produk</a>
            </div>
         </div>
      </div>
   </nav>
   {{-- Navbar End --}}

   {{-- section about --}}
   <section class="section-makanan">
      <div class="container">
         <div class="row mt-5">
            <div class="col-md-6">
               <img src="{{ Storage::url($item->image) }}" style="width: 800px; max-height: 500px;"
                  class="img-fluid rounded" alt="Gambar">
            </div>
            <div class="col-md-6">
               <h2 style="font-weight: 700">{{ $item->nama }}</h2>
               <p style="color: rgb(35, 35, 35);font-size:20px">Rp. {{ number_format($item->harga) }} / pcs</p>
               <!-- HTML !-->
               <a href="{{ $item->url }}" type="button" class="btn btn-outline-primary">Order Via Shopee</a>
            </div>
         </div>
         <div class="row justify-content-center mt-5">
            <div class="col-lg-12 col-md-6">
               <h3>Deskripsi Produk</h3>
               <p>{{ $item->deskripsi }}</p>
            </div>
         </div>
      </div>

   </section>



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
