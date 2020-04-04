@extends('layouts.master')
@section('content')
    <form action="/admin/tambah" method="POST">
    {{ csrf_field() }}
        <div class="form-group">
            <label>Nama Depan</label>
            <input name="nama_depan" class="form-control" placeholder="Nama Depan">
        </div>
        <div class="form-group">
            <label>Nama Blakang</label>
            <input name="nama_belakang" class="form-control" placeholder="Nama Belakang">
        </div>
        <div class="form-group">
            <label>Nama Jabatan</label>
            <input name="jabatan" class="form-control" placeholder="Jabatan">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>No Hp</label>
            <input name="no_hp" class="form-control" placeholder="No Hp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection