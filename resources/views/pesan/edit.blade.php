@extends('layouts.master')
@section('judul', 'Tambah Data Pesan')

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Pesan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Pesan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <div class="card-body">
                <form method="POST" action="/pesan/{{ $pesan->id }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Pelanggan</label>
                        <input type="text" name="no_plg" readonly VALUE="{{ $pesan->no_plg }}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                        <input type="text" name="barang" VALUE="{{$pesan->nama_brg}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Terima</label>
                        <input type="date" name="tanggal" VALUE="{{$pesan->tanggal_hari}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Metode Pembayaran</label>
                        <select name="metode_bayar" class="form-control" id="">
                            <option value="">-Pilih Metode Pembayaran-</option>

                            @foreach($metodebayar as $data)
                            <option value="{{$data->id}}">{{$data->kode}} - {{$data->metode_bayar}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga</label>
                        <input type="text" name="harga" VALUE="{{$pesan->harga}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- /.card -->

    </section>
@endsection
