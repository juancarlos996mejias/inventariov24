@extends('adminlte::page')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <div class="card">
                
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
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