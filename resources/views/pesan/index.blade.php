@extends('layouts.master')
@section('judul', 'Data Pesan')

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pesan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pesan</li>
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
                <a href="/pesan/form" class="btn btn-success">Tambah +</a>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No Pelanggan</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Tanggal Terima</th>
                            <th scope="col">Metode Pembayaran</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($pesan as $item)
                            <tr>
                                <th scope="row">{{ $nomor++ }}</th>
                                        {{-- Databases --}}
                                <td>{{ $item->no_plg }}</td>
                                <td>{{ $item->nama_brg }}</td>
                                <td>{{ $item->tanggal_hari }}</td>
                                <td>{{ $item->metodebayars_id }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>
                                    {{-- Tempat Tombol --}}
                                    <a href="/pesan/edit/{{ $item->id }}" class="btn btn-primary">Edit</a>
                                    {{-- Tombol Di Ambil Di AdminLTE3 --}}
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#modal-default{{ $item->id }}">
                                        Hapus
                                    </button>
                                    {{-- Modal Di Ambil Di AdminLTE3 --}}
                                    <div class="modal fade" id="modal-default{{ $item->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Peringatan!</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Yakin Data {{ $item->nama_brg }} Ingin Di Hapus?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Batal</button>
                                                    {{-- Proses Delete --}}
                                                    <form action="/pesan/{{ $item->id }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                                    </form>

                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->

    </section>
@endsection
