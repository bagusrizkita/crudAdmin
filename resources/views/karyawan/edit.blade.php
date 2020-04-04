@extends('layouts.master')
@section('content')
    <form action="/pegawai/update/{{$karyawan->id}}" method="POST">
    {{ csrf_field() }}
        <div class="form-group">
            <label>Nama Depan</label>
            <input name="nama_depan" class="form-control" placeholder="Nama Depan" value="{{$karyawan->nama_depan}}">
        </div>
        <div class="form-group">
            <label>Nama Blakang</label>
            <input name="nama_belakang" class="form-control" placeholder="Nama Belakang" value="{{$karyawan->nama_belakang}}">
        </div>
        <div class="form-group">
            <label>Nama Jabatan</label>
            <input name="jabatan" class="form-control" placeholder="Jabatan" value="{{$karyawan->jabatan}}">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
            <option value="L" @if($karyawan->jenis_kelamin=='L') selected @endif>Laki-Laki</option>
            <option value="P" @if($karyawan->jenis_kelamin=='P') selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>No Hp</label>
            <input name="no_hp" class="form-control" placeholder="No Hp" value="{{$karyawan->no_hp}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$karyawan->alamat}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection