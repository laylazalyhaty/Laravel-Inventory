@extends('main')

@section('title','Supplier')

@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Supplier</h1>
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
                    <strong>Edit Supplier</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('supplier')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('supplier/'.$supplier->kode_sup) }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" name="kode" class="form-control" value="{{$supplier->kode_sup}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{$supplier->nama_sup}}" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{$supplier->alamat}}" required>
                            </div>
                            <div class="form-group">
                                <label>Telpon</label>
                                <input type="text" name="telp" class="form-control" value="{{$supplier->telp}}" required>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <input type="text" name="agama" class="form-control" value="{{$supplier->agama}}" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" name="jkel" class="form-control" value="{{$supplier->jkel}}" required>
                            </div>
                            <div class="form-group">
                                <label>Hobi</label>
                                <input type="text" name="hobi" class="form-control" value="{{$supplier->hobi}}" required>
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