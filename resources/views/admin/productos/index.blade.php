@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Productos</h1>
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
                        <a href="{{route('admin.productos.create')}}" class="btn btn-primary mb-3">Nuevo Producto</a>

                        <table class="table table-bordered" id="productos_table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Formato</th>
                                    <th>Comentario</th>
                                    <th>Marca</th>
                                    <th>Usuario</th>
                                    <th>Proveedor</th>
                                    <th>Nº Pedido</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                <tr>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->cantidad}}</td>
                                    <td>{{$producto->formato}}</td>
                                    <td>{{$producto->comentario}}</td>
                                    <td>{{$producto->marca}}</td>
                                    <td>{{$producto->user->name}}</td>
                                    <td>{{$producto->proveedor->nombre}}</td>
                                    <td>{{$producto->pedido->id}}</td>
                                    <td>
                                        <a href="{{ route('admin.producto.edit', $producto->id) }}" class="btn btn-success">
                                            Editar
                                        </a>

                                        <form action="{{ route('admin.producto.destroy', $producto->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
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
        $('#producto_table').DataTable();
    });
</script>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#producto_table').DataTable();
    });
</script>
@endsection