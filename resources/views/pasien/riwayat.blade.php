@extends('layouts.app')

@section('title', 'Pasien | Riwayat')

@section('nav-item')
@include('pasien.components.navbar')
@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Riwayat</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Pasien</a></li>
                    <li class="breadcrumb-item active">Riwayat</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
@include('pasien.riwayat.show')
<!-- /.content -->
@endsection