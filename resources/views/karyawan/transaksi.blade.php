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
            <h1 class="m-0 text-dark">Data Karyawan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <form class="form-inline my-2 my-lg-0 float-right" action="admin/cari" method="GET">
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
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
			<th>Jabatan</th>
			<th>Opsi</th>
        </tr>
    </thead>    
		@foreach($karyawan as $k)
    <tbody>
        <tr>
			<td>{{ $k->nama_depan }}</td>
			<td>{{ $k->nama_belakang }}</td>
			<td>{{ $k->jabatan }}</td>
			<td>
				<a href="/pegawai/edit/{{ $k->id }}" class="btn btn-success  btn-sm">Gaji</a>
				<a href="/pegawai/edit/{{ $k->id }}" class="btn btn-warning btn-sm">Lembur</a>
				<a href="/pegawai/hapus/{{ $k->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Cuti</a>
			</td>
        </tr>
    </tbody>
		@endforeach
    </table>
    <nav aria-label="...">
      <ul class="pagination">
      {{ $karyawan->links() }}
      </ul>
    </nav>

    
    
@endsection