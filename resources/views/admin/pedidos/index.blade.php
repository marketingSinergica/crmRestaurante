@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Pedidos</h1>
            </div>
            
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('admin.pedidos.create')}}" class="btn btn-primary mb-3">Nuevo Pedido</a>

                        <table class="table table-bordered" id="pedidos_table">
                            <thead>
                                <tr>
                                    <th>Nº Pedido</th>
                                    <th>Fecha del pedido</th>
                                    <th>Fecha de entrega</th>
                                    <th>Estado</th>
                                    <th>Cantidad de productos</th>
                                    <th>Comentario</th>
                                    <th>Usuario</th>
                                    <th>Proveedor</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedidos as $pedido)
                                <tr>
                                    <td>{{$pedido->id}}</td>
                                    <td>{{$pedido->fechaPedido}}</td>
                                    <td>{{$pedido->fechaEntrega}}</td>
                                    <td>{{$pedido->estado}}</td>
                                    <td>{{$pedido->cantidadProductos}}</td>
                                    <td>{{$pedido->comentarioCocina}}</td>
                                    <td>{{$pedido->user->name}}</td>
                                    <td>{{$pedido->proveedor->nombre}}</td>
                                    <td>
                                        <a href="{{ route('admin.pedidos.edit', $pedido->id) }}" class="btn btn-success">
                                            Editar
                                        </a>

                                        <form action="{{ route('admin.pedidos.destroy', $pedido->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#pedido_table').DataTable();
    });
</script>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#pedido_table').DataTable();
    });
</script>
@endsection