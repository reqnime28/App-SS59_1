@extends('layouts.master')
@section('judul', 'Data Metode Pembayaran')

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Metode Pembayaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Metode Pembayaran</li>
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
                {{-- Tambah Data --}}
                <a href="/metode_bayar/form" class="btn btn-success">Tambah +</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Metode Pembayaran</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($metodebayar as $item)
                            <tr>
                                <th scope="row">{{ $nomor++ }}</th>
                                <td>{{ $item->kode }}</td>
                                <td>{{ $item->metode_bayar }}</td>
                                <td>
                                    <a href="/metode_bayar/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
                <!-- /.card -->

    </section>
@endsection
