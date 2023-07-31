      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-text mx-3">Kaliprau Admin </div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item {{ request()->is('admin/wisata') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('wisata.index') }}">
               <i class="fa-solid fa-location-dot fa-2xl"></i>
               <span>Wisata</span></a>
         </li>
         <li class="nav-item ">
            <a class="nav-link {{ request()->is('admin/makanan') ? 'active' : '' }}"
               href="{{ route('makanan.index') }}">
               <i class="fa-solid fa-bowl-food fa-2xl"></i>
               <span>Makanan</span></a>
         </li>
         <li class="nav-item ">
            <a class="nav-link {{ request()->is('admin/produk') ? 'active' : '' }}" href="{{ route('produk.index') }}">
               <i class="fa-solid fa-cart-shopping fa-2xl"></i>
               <span>Produk Lokal</span></a>
         </li>
         <li class="nav-item ">
            <a class="nav-link {{ request()->is('admin/pejabat') ? 'active' : '' }}"
               href="{{ route('pejabat.index') }}">
               <i class="fa-solid fa-person fa-2xl"></i>
               <span>Perangkat Desa</span>
            </a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

      </ul>
      <!-- End of Sidebar -->
