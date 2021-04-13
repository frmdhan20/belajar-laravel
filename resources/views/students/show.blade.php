  @extends('layout.main') <!-- "/" bisa diganti "." -->

  @section('judul', 'Detail Mahasiswa')

  @section('container')
    <div class="container"> <!-- untuk ketengahkan h1 -->
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Detail Mahasiswa</h1> <!--$nama ngambil dari web.php -->

          <!-- Internal CSS  -->
          <style>
            a{text-decoration: none;}
          </style>

          <!-- card -->
           <div class="card mt-3">
              <div class="card-body">
                <h5 class="card-title">{{ $student->nama }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
                <p class="card-text">{{ $student->email }}</p>
                <p class="card-text">{{ $student->jurusan }}</p>
                
                <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>

                <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>

                <a href="/students" class="card-link">Kembali</a>
              </div>
           </div>
          <!-- akhir card -->

        </div>
      </div>
    </div>
  @endsection

  <!-- line 32, $loop adalah variabel bawaan laravel jika menggunakan foreach -->