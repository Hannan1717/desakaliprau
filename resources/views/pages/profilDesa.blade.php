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
         <a class="navbar-brand" href="{{ route('home') }}">
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
               <a class="nav-link" href="{{ route('admin') }}">Admin</a>

            </div>
         </div>
      </div>
   </nav>
   {{-- Navbar End --}}

   {{-- section about --}}
   <section class="section-makanan">
      <div class="container">
         <h2 class="text-center mt-4 mb-5 title">Kaliprau, Ulujami, Pemalang</h2>
         <div class="row justify-content-center">
            <div class="col-md-4 img-container">
               <img src="{{ url('frontend/images/kalipraugang.png') }}"
                  style="border-radius: 10px; width:100% ; height:350px;object-fit:cover" alt="...">
            </div>
         </div>
         <div class="row justify-content-center mt-5">
            <div class="col-lg-10 col-md-6">
               <p style="text-align: justify">Desa Kaliprau dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore
                  et dolore magna aliqua. Varius quam quisque id diam vel quam elementum. Integer enim neque volutpat ac
                  tincidunt. Nunc sed augue lacus viverra vitae congue eu consequat. Scelerisque purus semper eget duis
                  at tellus. Arcu non odio euismod lacinia at quis risus. Sapien pellentesque habitant morbi tristique
                  senectus et. Tortor dignissim convallis aenean et tortor at risus viverra. Maecenas pharetra convallis
                  posuere morbi leo urna molestie at elementum. Volutpat est velit egestas dui. A iaculis at erat
                  pellentesque. Risus sed vulputate odio ut enim blandit volutpat maecenas. Tempus quam pellentesque nec
                  nam. Volutpat ac tincidunt vitae semper. Gravida in fermentum et sollicitudin. Magna fermentum iaculis
                  eu non diam phasellus vestibulum lorem. Aliquet lectus proin nibh nisl condimentum id venenatis.
                  Eleifend mi in nulla posuere. Suspendisse faucibus interdum posuere lorem ipsum dolor. Sagittis purus
                  sit amet volutpat consequat.
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Vestibulum sed arcu non odio euismod lacinia. Sed vulputate mi sit amet mauris
                  commodo. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Sit amet
                  dictum sit amet justo donec enim diam vulputate. Amet consectetur adipiscing elit ut aliquam purus.
                  Tristique senectus et netus et malesuada fames ac. Fames ac turpis egestas integer eget aliquet nibh
                  praesent. Rutrum quisque non tellus orci ac auctor augue mauris augue. Viverra accumsan in nisl nisi
                  scelerisque. Dapibus ultrices in iaculis nunc sed augue lacus. Nunc sed id semper risus in hendrerit.
                  Tristique sollicitudin nibh sit amet commodo nulla. Tellus molestie nunc non blandit. Commodo nulla
                  facilisi nullam vehicula ipsum a arcu. Nec dui nunc mattis enim ut tellus elementum. Tempor nec
                  feugiat nisl pretium. Id semper risus in hendrerit. Feugiat vivamus at augue eget arcu dictum.
                  Faucibus purus in massa tempor. Ultricies integer quis auctor elit. Lobortis elementum nibh tellus
                  molestie nunc non. Convallis tellus id interdum velit laoreet id donec. Magnis dis parturient montes
                  nascetur ridiculus mus mauris vitae. Bibendum arcu vitae elementum curabitur. Sit amet consectetur
                  adipiscing elit ut aliquam. Enim eu turpis egestas pretium aenean pharetra. Fames ac turpis egestas
                  maecenas pharetra convallis posuere. Sed adipiscing diam donec adipiscing tristique risus nec. Proin
                  sed libero enim sed faucibus.
               </p>
            </div>
         </div>

      </div>
   </section>

   <section class="mt-5" id="perangkat-desa">
      <div class="container">
         <div class="text-center">
            <h2 class="title mb-5">Perangkat Desa</h2>
         </div>
         <div class="row">
            @foreach ($pejabats as $item)
               <div class="col-md-6 col-lg-3 mb-4">
                  <div class="image-container" style="height: 300px !important">
                     <img src="{{ Storage::url($item->image) }}" class="image">
                     <div class="text-overlay">
                        <h5>{{ $item->nama }}</h5>
                        <p>{{ $item->jabatan }}</p>
                     </div>
                  </div>
               </div>
            @endforeach


         </div>
      </div>

      <section>
         <div class="container">
            <div class="text-center">
               <h2 class="text-center mt-4 mb-2 title">Pengurus Desa 2023</h2>

            </div>
            <div class="row mt-5">
               <div class="col-md-3">
                  <div class="image-container" style="height: 400px !important">
                     <img src="{{ url('frontend/images/joko.jpg') }}" class="image">
                     <div class="text-overlay">
                        <h5>Tarjono</h5>
                        <p>Kepala Desa 2025</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-9">
                  <p style="color: rgb(35, 35, 35);font-size:20px;text-align:justify">Lorem ipsum dolor sit amet,
                     consectetur adipiscing
                     elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium quam vulputate
                     dignissim suspendisse in est ante. In pellentesque massa placerat duis ultricies lacus. Enim nunc
                     faucibus a pellentesque. Risus nullam eget felis eget nunc. Et leo duis ut diam quam nulla. Avinar
                     etiam non quam lacus suspendisse faucibus interdum. Vel quam elementum pulvinar etiam non quam.
                     Mattis pellentesque id nibh tortor id aliquet lectus proin. Vitae sapien pellentesque habitant
                     morbi. <br>
                     Enim neque volutpat ac tincidunt vitae semper quis lectus nulla. Malesuada bibendum arcu vitae
                     elementum curabitur vitae nunc sed velit. Purus non enim praesent elementum facilisis leo vel
                     fringilla est. Nulla malesuada pellentesque elit eget gravida cum. Pulvinar neque laoreet
                     suspendisse interdum consectetur libero id faucibus. Enim nunc faucibus a pellentesque sit. Eros
                     donec ac odio tempor orci dapibus ultrices. Pellentesque dignissim enim sit amet venenatis. Ut
                     tristique et egestas quis ipsum suspendisse ultrices. Fermentum et sollicitudin ac orci phasellus.
                     Mauris vitae ultricies leo integer malesuada nunc.</p>
                  <!-- HTML !-->
               </div>
            </div>
         </div>
      </section>

   </section>
   <section id="contact" class="section-organisasi">
      <div class="container pt-5">
         <h2 class="text-center mb-5 title">Kontak</h2>
         <div class="row">
            <div class="col-lg-12">
               <div class="row">
                  <div class="col-md-4">
                     <div class="card pt-2 pb-2" style="border-radius:0%">
                        <div class="card-body text-center">
                           <i class="fa-solid fa-location-dot fa-2xl mb-4"></i>
                           <h3>Alamat</h3>
                           <p>Kaliprau, Ulujami, Pemalang</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card pt-2 pb-2" style="border-radius:0%">
                        <div class="card-body text-center">
                           <i class="fa-regular fa-envelope fa-2xl mb-4"></i>
                           <h3>Email</h3>
                           <p>Kaliprau@gmail.com</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card pt-2 pb-2" style="border-radius:0%">
                        <div class="card-body text-center">
                           <i class="fa-solid fa-phone fa-2xl mb-4"></i>
                           <h3>Telepon</h3>
                           <p>Nomor kantor</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 mt-5 mb-5">
            <iframe class="mb-4 mb-lg-0"
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31690.671973530945!2d109.54984438237977!3d-6.850507451860065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7027ffc2ceadef%3A0x5027a76e35651a0!2sKaliprahu%2C%20Kaliprau%2C%20Ulujami%2C%20Pemalang%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1690388855936!5m2!1sen!2sid"
               style="border:0; width: 100%; height: 384px;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </section>

   <footer class="section-footer mb-4 border-top">
      <div class="container-fluid">
         <div class="row border-top justify-content-center align-items-center pt-4">
            <div class="col-auto text-gray-500 font-weight-light">2023 Copyright KKN TIM II UNDIP 2023 • All rights
               reserved • Made in
               Brebes</div>
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
