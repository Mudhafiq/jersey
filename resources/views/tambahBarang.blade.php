@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">List jersey</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Barang</li>
                    <li class="breadcrumb-item"><a href="{{ url('admin-laporan') }}">Laporan</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('admin-user') }}">Data User</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Tambah Barang ADMIN</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 8rem;">Nama Barang</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nama_barang" required>
                        </div>
                        <div class="input-group mb-3">
                        {{-- <span class="input-group-text" id="inputGroup-sizing-default">File Gambar</span> --}}
                        <input type="file" enctype="multipart/form-data"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="gambar">
                        </div>
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 8rem;">Harga Barang</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="harga"  required>
                        </div>
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 8rem;">Jumlah</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="jumlah"  required>
                        </div>
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 8rem;">Keterangan</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="keterangan"  required>
                        </div>
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 8rem;">Berat</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="berat"  required>
                        </div>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-success p-2"  style="margin: 0 auto; width: 80rem; font-size: 18px; font-weight: bold;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection