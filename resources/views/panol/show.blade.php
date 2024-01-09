@extends('layouts.app')

@section('template_title')
    {{ $panol->name ?? "{{ __('Show') Panol" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Panol</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('panols.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                    <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $panol->fecha }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $panol->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Artículo:</strong>
                            {{ $panol->articulo }}
                        </div>
                      
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $panol->marca }}
                        </div>
                      
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $panol->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection