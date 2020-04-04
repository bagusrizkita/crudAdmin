@extends('layouts.master')
@section('content')
    <form autocomplate="off" action="/admin/simpanlembur" method="POST">
    {{ csrf_field() }}
        <div class="form-group">
            <label>Id Karyawan</label>
            <input name="id_karyawan" class="form-control" placeholder="Id Karyawan">
        </div>
        <div class="form-group">
            <label>Id SPV</label>
            <input name="id_spv" class="form-control" placeholder="Id SPV">
        </div>
        <div class="form-group">
            <label>Lama Lembur</label>
            <input name="lamalembur" class="form-control" placeholder="Lama Lembur">
        </div>
        <div class="form-group">
            <label>Upah Lembur</label>
            <input name="upahlembur" class="form-control" placeholder="Upah Lembur">
        </div>
          
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection