  @extends('layout.main') <!-- "/" bisa diganti "." -->

  @section('judul', 'Daftar Student')

  @section('container')
    <div class="container"> <!-- untuk ketengahkan h1 -->
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Daftar Mahasiswa</h1> <!--$nama ngambil dari web.php -->

          <!-- Internal CSS  -->
          <style>
            a{text-decoration: none;}
          </style>

          <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

          <!-- status -->
          @if (session('status'))
              <div class="alert alert-success">
                 {{ session('status') }}
              </div>
          @endif

          <!-- badges -->
            <ul class="list-group mt-3">
              @foreach( $students as $student ) <!-- blade -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $student->nama }}
                  <a href="/students/{{ $student->id }}" class="badge bg-info text-dark">detail</a>
                </li>
              @endforeach
            </ul>
          <!-- akhir badges -->

        </div>
      </div>
    </div>
  @endsection

  <!-- line 32, $loop adalah variabel bawaan laravel jika menggunakan foreach -->