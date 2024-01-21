
@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection

@section('template_title')
    Product
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
                                {{ __('Productos / Pañol') }}
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

                    <div class="card-body">
                    <table class="table table-striped table-hover" >
                            <table class="table table-striped table-hover"id= "panol">
                                <thead class="thead table-secondary">
                                    <tr>
                                    <th>Id</th>
                                        <th>Fecha</th>
										<th>Código</th>
										<th>Artículo</th>
										<th>Marca</th>
										<th>Cantidad</th>
                                        <th>Acción</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($panols as $panol)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $panol->fecha }}</td>
											<td>{{ $panol->codigo }}</td>
											<td>{{ $panol->articulo }}</td>
											<td>{{ $panol->marca }}</td>
											<td>{{ $panol->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('panols.destroy',$panol->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('panols.show',$panol->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('panols.edit',$panol->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('') }}</button>
                                                </form>
                                            </td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                {!! $panols->links() !!}
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
    new DataTable('#panol');
</script>

@endsection