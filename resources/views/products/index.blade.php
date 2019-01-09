@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-atlas"></i> Produtos</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="/products/create" class="btn btn-primary">
                <i class="fa fa-plus"> </i> Novo produto
            </a>
            <a href="/products/priceficate" class="btn btn-secondary">
            <i class="fa fa-hand-holding-usd"> </i> Precificação
            </a>
            <a href="/products/priceficate" class="btn btn-warning">
            <i class="fa fa-sync-alt"> </i> Atualização
            </a>
            <a href="/products/priceficate" class="btn btn-info">
                <i class="fa fa-hand-holding-usd"> </i> Importação
            </a>
            <a href="/products/priceficate" class="btn btn-dark">
                <i class="fa fa-layer-group"> </i> Agrupamentos
            </a>
            <hr>
            <div class="card">
                <div class="card-header"><i class="fa fa-table"></i> Lista de produtos</div>

                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>produto</th>
                                <th>matricula</th>
                                <th>preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->code}}</td>
                                    <td>{{$product->price}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Nenhum produto cadastrado até agora. <a href="/products/create">clique aqui</a> para começar</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection