  @extends('layout/main')

 <!-- menampilkan title -->
  @section('judul', 'Home')

 <!-- menampilkan isi konten -->
  @section('container')

    <!-- jumbotron -->
   <div class="container">
    <div class="jumbotron mt-3">
    <h1 class="display-4">Selamat Datang di Website Kami!</h1>
    <p class="lead">Hallo, Nama Saya Fajar Ramadhan</p>
    <hr class="my-4">
    <p>Perkembangan sistem informasi manajemen telah menyebabkan terjadinya <br> perubahan yang cukup signifikan dalam pola pengambilan keputusan yang <br> dilakukan oleh manajemen baik pada tingkat operasional (pelaksana teknis) <br> maupun pimpinan pada semua jenjang.</p>
    <a class="btn btn-primary btn-lg" href="/about" role="button">About</a>
  </div>
  </div>
    <!-- akhir jumbotron -->

  @endsection
  	<!-- <div class="container"> --> <!-- untuk ketengahkan h1 -->
  		<!-- <div class="row">
  			<div class="col">
    		  <h1 class="mt-3">Hello, world!</h1>
  			</div>
  		</div>
  	</div> -->