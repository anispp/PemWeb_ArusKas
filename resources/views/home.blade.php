@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row text-center mb-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="text-success"><i class="fa fa-arrow-up" aria-hidden="true"></i> Kas Masuk</h2>
                    <p class="display-4">{{$totalMasuk}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="text-danger"><i class="fa fa-arrow-down" aria-hidden="true"></i> Kas Keluar</h2>
                    <p class="display-4">{{$totalKeluar}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="text-primary"><i class="fas fa-dollar-sign"></i> Saldo Akhir</h2>
                    <p class="display-4">{{$saldo}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
