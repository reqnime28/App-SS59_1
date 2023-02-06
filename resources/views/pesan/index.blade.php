@extends('layouts.master')
@section('judul','Data Pesan')

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
            <th scope="col">Foto Barang</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($pesan as $item)
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
              <a href="#" class="btn btn-primary">Edit</a>
              <a href="#" class="btn btn-danger">Hapus</a>
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