@extends('main')

@section('title','Barang')

@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Barang</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <!-- <li><a href="#">Dashboard</a></li> -->
                    <li class="active"><i class="fa fa-dashboard"></i></li>
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
                    <strong>Edit Barang</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('barang')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('barang/'.$barang->kode_brg) }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" name="kode" class="form-control" value="{{$barang->kode_brg}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{$barang->nama_brg}}" required>
                            </div>
                            <div class="form-group">
                                <label>Satuan</label>
                                <input type="text" name="satuan" class="form-control" value="{{$barang->satuan}}" required>
                            </div>
                            <div class="form-group">
                                <label>Harga Beli</label>
                                <input type="text" name="harga_beli" class="form-control" value="{{$barang->harga_beli}}" required>
                            </div>
                            <div class="form-group">
                                <label>Harga Jual</label>
                                <input type="text" name="harga_jual" class="form-control" value="{{$barang->harga_jual}}" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="text" name="jumlah" class="form-control" value="{{$barang->jumlah}}" required>
                            </div>
                            <div class="form-group">
                                <label>Diskon</label>
                                <input type="text" name="diskon" class="form-control" value="{{$barang->diskon}}" required>
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