
@extends('adminlte::page')

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
                        <div class="table-responsive text-center ">
                            <table class="table table-striped table-hover ">
                                <thead class="thead thead-dark">
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