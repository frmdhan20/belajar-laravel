  @extends('layout.main') <!-- "/" bisa diganti "." -->

  @section('judul', 'Daftar Mahasiswa SIB4')

  @section('container')
    <div class="container"> <!-- untuk ketengahkan h1 -->
      <div class="row">
        <div class="col">
          <h1 class="mt-3">Daftar Mahasiswa SIB4</h1> <!--$nama ngambil dari web.php -->

          <!-- Internal CSS  -->
          <style>
            a{text-decoration: none;}
          </style>

          <button class="btn btn-primary my-3">Tambah Data Mahasiswa</button>
        
        <!-- tabel -->
          <table class="table table-primary table-striped mt-3">
            <thead>
             <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Asal Kota</th>
                <th scope="col">Hobi</th>
                <th scope="col">Aksi</th>
             </tr>
            </thead>

            <tbody>
              @foreach( $friends as $fri ) <!-- blade -->
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $fri->nama }}</td>
                <td>{{ $fri->umur }}</td>
                <td>{{ $fri->asalkota }}</td>
                <td>{{ $fri->hobi }}</td>
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