@extends('layouts.app')

@section('title', 'Dokter | Obat')

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
                    <li class="breadcrumb-item"><a href="#">Dokter</a></li>
                    <li class="breadcrumb-item active">Obat</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
@include('dokter.obat.create')
<!-- /.content -->
@endsection