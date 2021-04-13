  @extends('layout.main') <!-- "/" bisa diganti "." -->

  @section('judul', 'Daftar Film')

  @section('container')
    <div class="container"> <!-- untuk ketengahkan h1 -->
      <div class="row">
        <div class="col">
          <h1 class="mt-3">Daftar Film</h1> <!--$nama ngambil dari web.php -->

          <!-- Internal CSS  -->
          <style>
            a{text-decoration: none;}
          </style>

          <button class="btn btn-primary my-3">Tambah Data Film</button>
        
        <!-- tabel -->
          <table class="table table-primary table-striped mt-3">
            <thead>
             <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Produser</th>
                <th scope="col">Sutradara</th>
                <th scope="col">Tahun</th>
                <th scope="col">Aktor</th>
                <th scope="col">Aksi</th>
             </tr>
            </thead>

            <tbody>
              @foreach( $movies as $mvi ) <!-- blade -->
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $mvi->judul }}</td>
                <td>{{ $mvi->produser }}</td>
                <td>{{ $mvi->sutradara }}</td>
                <td>{{ $mvi->tahun }}</td>
                <td>{{ $mvi->aktor }}</td>
                <td>
                  <a href="#" class="badge bg-success">edit</a>
                  <a href="#" class="badge bg-danger">hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>

        </div>
      </div>
    </div>
  @endsection

  <!-- line 32, $loop adalah variabel bawaan laravel jika menggunakan foreach -->