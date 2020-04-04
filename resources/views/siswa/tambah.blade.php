@extends('layouts.master')
@section('content')
    <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
    <form id="formtambah" action="/siswa/tambah" method="POST">
    {{ csrf_field() }}
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" placeholder="Nama" >
            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
        </div>
        <div class="form-group">
            <label>Tahun</label>
            <input name="tahun" class="form-control" placeholder="yyyy">
            @if($errors->has('tahun'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun')}}
                                </div>
                            @endif
        </div>
        <div class="form-group">
            <label>Nilai</label>
            <input name="nilai" class="form-control" placeholder="Nilai">
            @if($errors->has('nilai'))
                                <div class="text-danger">
                                    {{ $errors->first('nilai')}}
                                </div>
                            @endif
        </div>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin menyimpan data')">Simpan</button>
    </form>
@endsection