@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-home"></i> Home</li>
                    </ol>
                    </nav>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">Menu Principal</div>

                    <div class="card-body">
                        <a href="/products" class="btn btn-link">Produtos</a><br>
                        <a href="/stock" class="btn btn-link disabled">Funcionários</a><br>
                        <a href="/virtual-shopp" class="btn btn-link disabled">Clientes</a><br>
                        <a href="/fisical-shopp" class="btn btn-link disabled">Loja Virtual</a><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            Bem vindo ao sistema de controle de estoque e loja virtual
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
