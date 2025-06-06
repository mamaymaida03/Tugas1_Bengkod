@extends('layouts.app')

@section('title', 'Obat')

@section('nav-item')
    @include('dokter.components.navbar')
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Obat</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dokter/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Obat</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Obat</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('obatUpdate', ['id' => $obat->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_obat">Nama Obat</label>
                                <input type="text" class="form-control" id="nama_obat" name="nama_obat"
                                       value="{{ old('nama_obat', $obat->nama_obat) }}" />
                            </div>
                            <div class="form-group">
                                <label for="kemasan">Kemasan</label>
                                <input type="text" class="form-control" id="kemasan" name="kemasan"
                                       value="{{ old('kemasan', $obat->kemasan) }}" />
                            </div>
                            <div class="form-group">
                                <label for="harga_obat">Harga</label>
                                <input type="number" class="form-control" id="harga_obat" name="harga"
                                       value="{{ old('harga', $obat->harga) }}" />
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">
                                Update Obat
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
