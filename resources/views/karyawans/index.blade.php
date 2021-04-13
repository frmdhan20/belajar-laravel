  @extends('layout.main') <!-- "/" bisa diganti "." -->

  @section('judul', 'Daftar Karyawan')

  @section('container')
    <div class="container"> <!-- untuk ketengahkan h1 -->
      <div class="row">
        <div class="col">
          <h1 class="mt-3">Daftar Karyawan</h1> <!--$nama ngambil dari web.php -->

          <!-- Internal CSS  -->
          <style>
            a{text-decoration: none;}
          </style>

          <button class="btn btn-primary my-3">Tambah Data Karyawan</button>
        
        <!-- tabel -->
          <table class="table table-primary table-striped mt-3">
            <thead>
             <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Aksi</th>
             </tr>
            </thead>

            <tbody>
              @foreach( $karyawans as $kry ) <!-- blade -->
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $kry->nama }}</td>
                <td>{{ $kry->umur }}</td>
                <td>{{ $kry->jabatan }}</td>
                <td>{{ $kry->tgmasuk }}</td>
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