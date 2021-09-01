@extends('main')

@section('title','Penjualan')

@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Penjualan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Penjualan</a></li>
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
                    <strong>Tambah Penjualan</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('penjualan')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('penjualan') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Kode Penjualan</label>
                                <input type="text" name="kode" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="text" name="kode" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <select name="barang" id="">
                                    <option value="">- Pilih -</option>
                                    @@foreach ($penjualan as $item)
                                        
                                    @endforeach
                                </select>
                                {{-- <input type="text" name="nama" class="form-control" required> --}}
                            </div>
                            <div class="form-group">
                                <label>Pembeli</label>
                                <input type="text" name="Pembeli" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" name="tanggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="keterangan" class="form-control" required></textarea>
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