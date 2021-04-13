  @extends('layout.main') <!-- "/" bisa diganti "." -->

  @section('judul', 'Daftar Mahasiswa')

  @section('container')
    <div class="container"> <!-- untuk ketengahkan h1 -->
      <div class="row">
        <div class="col">
          <h1 class="mt-3">Daftar Mahasiswa</h1> <!--$nama ngambil dari web.php -->

          <!-- Internal CSS  -->
          <style>
            a{text-decoration: none;}
          </style>

          <button class="btn btn-primary my-3">Tambah Data Mahasiswa</button>
        
        <!-- tabel -->
          <table class="table table-success table-striped mt-3">
            <thead>
             <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
             </tr>
            </thead>

            <tbody>
              @foreach( $mahasiswa as $mhs ) <!-- blade -->
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->email }}</td>
                <td>{{ $mhs->jurusan }}</td>
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