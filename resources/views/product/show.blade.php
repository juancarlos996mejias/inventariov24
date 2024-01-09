@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Detalles') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $product->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Artículo:</strong>
                            {{ $product->articulo }}
                        </div>
                        <div class="form-group">
                            <strong>Lote:</strong>
                            {{ $product->lote }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $product->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Rubro:</strong>
                            {{ $product->rubro }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $product->stock }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
