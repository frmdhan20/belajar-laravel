  @extends('layout.main') <!-- "/" bisa diganti "." -->

  @section('judul', 'Form Ubah Data Mahasiswa')

  @section('container')
    <div class="container"> <!-- untuk ketengahkan h1 -->
      <div class="row">
        <div class="col-8">
          <h1 class="mt-3">Form Ubah Data Mahasiswa</h1> <!--$nama ngambil dari web.php -->

          <!-- Internal CSS  -->
          <style>
            a{text-decoration: none;}
          </style>

          <!-- form group -->
           <form method="post" action="/students/{{ $student->id }}">
            @method('patch')
            @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}" required="">
              </div>
                <!-- @error('nama')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror -->

              <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan nim" name="nim" value="{{ $student->nim }}" required="">
              </div>
                <!-- @error('nim')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror -->

              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email" value="{{ $student->email }}" required="">
              </div>

              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{ $student->jurusan }}" required="">
              </div>

              <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>

              <!-- <a href="#">Kembali</a> -->
          </form>
          <!-- akhirform group -->

        </div>
      </div>
    </div>
  @endsection

  <!-- line 32, $loop adalah variabel bawaan laravel jika menggunakan foreach -->