  @extends('layout.main') <!-- "/" bisa diganti "." -->

  @section('judul', 'Daftar Dosen')

  @section('container')
    <div class="container"> <!-- untuk ketengahkan h1 -->
      <div class="row">
        <div class="col">
          <h1 class="mt-3">Daftar Dosen</h1> <!--$nama ngambil dari web.php -->

          <!-- Internal CSS  -->
          <style>
            a{text-decoration: none;}
          </style>

          <button href="/dosens/create" class="btn btn-primary my-3">Tambah Data Dosen</button>
        
        <!-- tabel -->
          <table class="table table-success table-striped mt-3">
            <thead>
             <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIDN</th>
                <th scope="col">Email</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Aksi</th>
             </tr>
            </thead>

            <tbody>
              @foreach( $dosens as $dsn ) <!-- blade -->
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $dsn->nama }}</td>
                <td>{{ $dsn->nidn }}</td>
                <td>{{ $dsn->email }}</td>
                <td>{{ $dsn->matakuliah }}</td>
                <td>
                  <a href="#" class="badge bg-success">edit</a>
                  <a href="#" class="badge bg-danger">hapus</a>
                  <!-- <a href="#" class="badge bg-primary">detail</a> -->
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