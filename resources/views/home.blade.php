@extends('adminlte::page')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <div class="card">
                
                <div class="card-header ">{{ __('Bienvenido') }}</div>

                <div class="card-body bg-success">
                    @if (session('status'))
                    
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Registro exitoso!') }}


                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-4">

<div class="row justify-content-center justify-content-around">  
<div class="card" style="width: 15rem;">
  <div class="card-body bg-dark rounded">
    <h5 class="card-title"></h5>
    <img src="/img/ventas.png" alt="" width="60" height="54">
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <br>
    <a href="#" class="card-link"><p class="card-text text-center">VENTAS</p></a>
  </div>
</div>


<div class="card" style="width: 15rem;">
  <div class="card-body bg-dark rounded">
    <h5 class="card-title"></h5>
    <img src="/img/pañol.png" alt="" width="60" height="54">
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <br>
   <a href="/panols" class="card-link"><p class="card-text text-center">PAÑOL</p></a>
  </div>
</div>

<div class="card" style="width: 15rem;">
  <div class="card-body bg-dark rounded">
    <h5 class="card-title"></h5>
    <img src="/img/inventario.png" alt="" width="60" height="54">
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <br>
    <a href="/products" class="card-link"><p class="card-text text-center">PRODUCTOS</p></a>
  </div>
</div>
</div>

<div class="row justify-content-center justify-content-around mt-4">
<div class="card" style="width: 15rem;">
  <div class="card-body bg-dark rounded">
    <h5 class="card-title"></h5>
    <img src="/img/engranaje.png" alt="" width="60" height="54">
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <br>
    <a href="#" class="card-link"><p class="card-text text-center">OPERACIONES</p></a>
  </div>
</div>


<div class="card" style="width: 15rem;">
  <div class="card-body bg-dark rounded">
    <h5 class="card-title"></h5>
    <img src="/img/griferia.png" alt="" width="50" height="50">
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <br>
    <a href="/griferia"class="card-link"><p class="card-text text-center">GRIFERIA</p></a>
  </div>
</div>

<div class="card" style="width: 15rem;">
  <div class="card-body bg-dark rounded">
    <h5 class="card-title"></h5>
    <img src="/img/dashboard2.png" alt="" width="60" height="54">
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <br>
    <a href="/dashboard" class="card-link"><p class="card-text text-center">DASHBOARD</p></a>
  </div>
</div>
</div>
</div>
@endsection



@section('css')
<link rel="stylesheet" href="/css/estilo.css">
@endsection

@section('js')
<script>
  Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Your work has been saved',
    showConfirmButton: false,
    timer: 1500
  })
</script>
@stop

