<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Wisata</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link rel="stylesheet" href="frontend/styles/style.css">
   <script src="https://kit.fontawesome.com/e004402e47.js" crossorigin="anonymous"></script>
</head>

<body class="body-bg">
   {{-- Navbar  start --}}
   <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
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
               <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
               <a class="nav-link active" href="{{ route('wisata') }}">Wisata</a>
               <a class="nav-link" href="{{ route('makanan') }}">Makanan</a>
               <a class="nav-link" href="{{ route('produk') }}">Produk</a>
            </div>
         </div>
      </div>
   </nav>
   {{-- Navbar End --}}

   {{-- section about --}}
   <section class="section-makanan" id="about">
      <div class="container">
         <h2 class="text-center mt-4 mb-2 title">Wisata di Desa Kaliprau</h2>
         <p class="text-center mb-5">Temukan Tempat menarik dan mempesona di desa kaliprau</p>
         <div class="row justify-content-center">
            @foreach ($items as $item)
               <div class="col-md-10">
                  <div class="card mb-4" style="max-width: 1000px;">
                     <div class="row g-0">
                        <div class="col-md-4">
                           <img src="{{ Storage::url($item->image) }}"
                              style="max-height: 200px ;width:400px;object-fit:cover" class="img-fluid rounded-start"
                              alt="...">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title">{{ $item->nama }}</h5>
                              <p class="card-text" style="text-align: justify">{{ Str::limit($item->deskripsi, 200) }}
                              </p>
                              <a href="{{ route('detail', $item->slug) }}" type="button"
                                 class="btn btn-outline-primary">Jelajahi</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endforeach

         </div>

      </div>
   </section>


   {{-- <footer class="section-footer mb-4 border-top">
      <div class="container-fluid">
         <div class="row border-top justify-content-center align-items-center pt-4">
            <div class="col-auto text-gray-500 font-weight-light">2023 Copyright KKN TIM II UNDIP 2023 • All rights
               reserved • Made in
               Pemalang</div>
         </div>
      </div>
   </footer> --}}

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
