@extends('main')

@section('title','Karyawan')

@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Karyawan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Karyawan</a></li>
                    <li class="active">Add</i></li>
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
    
<div class="content mt-3">
    <div class="animated fadeIn">
        
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah Karyawan</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('karyawan')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('karyawan') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" name="kode" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <br>
                                <input type="radio" id="jkel" name="jkel" value="Laki-laki"> Laki-laki<br>
								<input type="radio" id="jkel" name="jkel" value="Perempuan"> Perempuan<br>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select id="agama" name="agama">
									<option value="-" selected="selected"> -Pilih-</option>
									<option value="Islam"> Islam</option>
									<option value="Kristen"> Kristen</option>
									<option value="Buddha"> Buddha</option>
									<option value="Hindu"> Hindu</option>
									<option value="Kong hu chu"> Kong hu chu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hobi</label>
                                <input type="text" name="hobi" class="form-control" required>
                                <br>
                                <label><input type="checkbox" name="hobi[]" value="Memancing">Memancing</label>
                                <label><input type="checkbox" name="hobi[]" value="Berenang">Berenang</label>
                                <label><input type="checkbox" name="hobi[]" value="Makan">Makan</label>
                                <label><input type="checkbox" name="hobi[]" value="Menari">Menari</label>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Telp</label>
                                <input type="text" name="telp" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>


        
        
    </div>
</div>

@endsection