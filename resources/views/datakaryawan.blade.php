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
                    <strong>Data Karyawan</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('karyawan/add')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tbody>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Hobi</th>
                            <th>Alamat</th>
                            <th>Telp</th>
                            <th></th>
                        </tr>
                    </tbody>
                    </thead>
                    @foreach ($karyawan as $item)
                        <tr>
                            <td>{{$item->kode_kar}}</td>
                            <td>{{$item->nama_kar}}</td>
                            <td>{{$item->jkel}}</td>
                            <td>{{$item->agama}}</td>
                            <td>{{$item->hobi}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->telp}}</td>
                            <td class="text-center">
                                <a href="{{url('karyawan/editkaryawan/'.$item->kode_kar)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{url('karyawan/'.$item->kode_kar)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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