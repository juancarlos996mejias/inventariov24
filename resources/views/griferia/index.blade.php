@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')


<br>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Productos / Griferia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('panols.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif



<div class="card-body ">
    <div class="table-responsive">
        <table class="table table-striped table-hover text-center" id= "griferia">
            <thead class="table-secondary text-center">
                <tr>
                
                    <th>Código</th>
                    <th>Artículo</th>
                    <th>Marca</th>
                    <th>Stock</th>
                    <th>Talar</th>
                    <th>Outlet</th>
                    <th>Quilmes</th>
                    <th>Acción</th>


                   
                </tr>
            </thead>


            <tbody>
                @foreach ($griferias as $griferia)
                <tr>
               
                
                    <td>{{ $griferia->codigo}}</td>
                    <td>{{ $griferia->articulo}}</td>
                    <td>{{ $griferia->marca}}</td>
                    <td>{{ $griferia->stockotal}}</td>
                    <td>{{ $griferia->almacenTalar}}</td>
                    <td>{{ $griferia->almacenOutlet}}</td>
                    <td>{{ $griferia->almacenQuilmes}}</td>
                    <td>{{ $griferia->accion}}</td>
                    

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
</div>
<div class="d-flex justify-content-end">

</div>
</div>
</div>
</div>


@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    new DataTable('#griferia');
</script>

@endsection