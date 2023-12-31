      @extends('layouts.admin')

      @section('content')
         <!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
               <h1 class="h3 mb-0 text-gray-800">Makanan</h1>
               <a href="{{ route('makanan.create') }}" class="btn btn-sm btn-primary shadow-sm">
                  <i class="fas fa-plus fa-sm text-white-50"></i>Tambahkan Makanan</a>
            </div>

            <!-- Content Row -->
            <div class="row">
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Deskripsi</th>
                              <th>Gambar</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse($items as $item)
                              <tr>
                                 <td>{{ $loop->iteration }}</td>

                                 <td>{{ $item->nama }}</td>
                                 <td>{{ $item->deskripsi }}</td>
                                 <td>
                                    <img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px"
                                       class="img-thumbnail">
                                 </td>
                                 <td>
                                    <a href="{{ route('makanan.edit', $item->id) }}" class="btn btn-info">
                                       <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('makanan.destroy', $item->id) }}" method="post"
                                       class="d-inline">
                                       @csrf
                                       @method('delete')
                                       <button class="btn btn-danger">
                                          <i class="fa fa-trash"></i>
                                       </button>
                                    </form>
                                 </td>
                              </tr>
                           @empty
                              <td colspan="7" class="text-center">
                                 Empty Data
                              </td>
                           @endforelse
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.container-fluid -->
      @endsection
