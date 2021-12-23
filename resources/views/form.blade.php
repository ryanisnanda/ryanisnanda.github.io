<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Karyawan</title>
  </head>
  <body>
  	@foreach ( $karyawan as $kyw)
  	<div class="container">
  		<h1 class="mt-3">Form Karyawan</h1>
	  	<form>
			  <div class="row mb-3">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama*</label>
			    <div class="col-sm-10">
			       <td>{{ $kyw->nama}}</td>
			    </div>
			  </div>
			  <div class="row mb-3">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
			    <div class="col-sm-10">
			      <td>{{ $kyw->alamat}}</td>
			    </div>
			  </div>
			  <div class="row mb-3">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">No KTP*</label>
			    <div class="col-sm-10">
			      <td>{{ $kyw->no_ktp}}</td>
			    </div>
			  </div>
			  <label>Pendidikan</label>
			  <table class="table table-striped">
				 <thead>
				    <tr>
				      <th scope="col">Nama Sekolah/Universitas*</th>
				      <th scope="col">Jurusan*</th>
				      <th scope="col">Tahun Masuk*</th>
				      <th scope="col">Tahun Lulus*</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				       <td>{{ $kyw->sekolah}}</td>
				       <td>{{ $kyw->jurusan}}</td>
				       <td>{{ $kyw->tahun_masuk_sekolah}}</td>
				       <td>{{ $kyw->tahun_lulus_sekolah}}</td>
				    </tr>
				  </tbody>
				</table>
				<div></div>
				<label>Pengalaman Kerja</label>
				<table class="table table-striped">
				 <thead>
				    <tr>
				      <th scope="col">Perusahaan*</th>
				      <th scope="col">Jabatan*</th>
				      <th scope="col">Tahun*</th>
				      <th scope="col">Keterangan*</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				       <td>{{ $kyw->perusahaan}}</td>
				       <td>{{ $kyw->jabatan}}</td>
				      <td>{{ $kyw->tahun_pengalaman}}</td>
				       <td>{{ $kyw->keterangan}}</td>
				    </tr>
				    </tbody>
				</table>
				<button type="button" class="btn btn-primary">Submit</button>
				
		</form>
	</div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    @endforeach
  </body>
</html>