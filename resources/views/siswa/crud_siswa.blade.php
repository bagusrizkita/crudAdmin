@extends('layouts.master')
@section('content')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <form class="form-inline my-2 my-lg-0 float-right" action="siswa/cari" method="GET">
            <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
          </form>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<table class="table table-hover">
    <thead>
		<tr>
			<th>Nama</th>
			<th>Tahun</th>
			<th>Nilai</th>
			<th>Opsi</th>
        </tr>
    </thead>    
		@foreach($siswa as $s)
    <tbody>
        <tr>
			<td>{{ $s->nama }}</td>
            
			<td>{{ $s->tahun }}</td>
            
			<td>{{ $s->nilai }}</td>
            
			<td>
				<a href="/siswa/edit/{{ $s->id }}" class="btn btn-warning btn-sm">Edit</a>
				
				<a href="/siswa/hapus/{{ $s->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda menghapus data?')">Hapus</a>
			</td>
        </tr>
    </tbody>
		@endforeach
    </table>
    
    

    
    
@endsection