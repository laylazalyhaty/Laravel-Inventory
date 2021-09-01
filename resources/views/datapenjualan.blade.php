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
        
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Penjualan</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('penjualan/add')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tbody>
                        <tr>
                            <th>Kode Transaksi</th>
                            <th>Kode Brg</th>
                            <th>Nama</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Pembeli</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th></th>
                        </tr>
                    </tbody>
                    </thead>
                    @foreach ($penjualan as $item)
                        <tr>
                            <td>{{$item->kode_jual}}</td>
                            <td>{{$item->kode_brg}}</td>
                            <td>{{$item->nama_brg}}</td>
                            <td>{{$item->jumlah}}</td>
                            <td>{{$item->harga}}</td>
                            <td>{{$item->pembeli}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td class="text-center">
                                <a href="{{url('penjualan/editpenjualan/'.$item->kode_jual)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{url('penjualan/'.$item->kode_jual)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection