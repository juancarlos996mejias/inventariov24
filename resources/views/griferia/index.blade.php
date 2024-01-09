@extends('adminlte::page')

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



<div class="card-body">
    <div class="table-responsive text-center ">
        <table class="table table-striped table-hover ">
            <thead class="thead thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Código</th>
                    <th>Artículo</th>
                    <th>Marca</th>
                    <th>Stock Total</th>
                    <th>Talar</th>
                    <th>Outlet</th>
                    <th>Quilmes</th>
                    <th>Acción</th>


                    <th></th>
                </tr>
            </thead>


            <tbody>
                @foreach ($griferias as $griferia)
                <tr>


                    <td>{{ $griferia->id}}</td>
                    <td>{{ $griferia->codigo}}</td>
                    <td>{{ $griferia->articulo}}</td>
                    <td>{{ $griferia->marca}}</td>
                    <td>{{ $griferia->stockTotal}}</td>
                    <td>{{ $griferia->almacenTalar}}</td>
                    <td>{{ $griferia->almacenOutlet}}</td>
                    <td>{{ $griferia->almacenQuilmes}}</td>
                    <td>

                        <form class="d-flex justify-content-around" action="{{ route('griferia.destroy',$griferia->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('griferia.show',$griferia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                            <a class="btn btn-sm btn-success" href="{{ route('griferia.edit',$griferia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
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

</div>
</div>
</div>
</div>


@endsection