@extends('layouts.master')
@section('content')
    <form action="/siswa/update/{{$siswa->id}}" method="POST">
    {{ csrf_field() }}
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" placeholder="" value="{{$siswa->nama}}">
            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
        </div>
        <div class="form-group">
            <label>Tahun</label>
            <input name="tahun" class="form-control" placeholder="" value="{{$siswa->tahun}}">
            @if($errors->has('tahun'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun')}}
                                </div>
                            @endif
        </div>
        <div class="form-group">
            <label>Nilai</label>
            <input name="nilai" class="form-control" placeholder="" value="{{$siswa->nilai}}">
            @if($errors->has('nilai'))
                                <div class="text-danger">
                                    {{ $errors->first('nilai')}}
                                </div>
                            @endif
        </div>
        <button type="submit" class="btn btn-primary"onclick="return confirm('Apakah Anda yakin mengubah data')">Submit</button>
    </form>
@endsection