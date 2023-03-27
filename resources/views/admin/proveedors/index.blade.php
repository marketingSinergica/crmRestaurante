@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Proveedores</h1>
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
                        <a href="{{route('admin.proveedors.create')}}" class="btn btn-primary mb-3">Nuevo Proveedor</a>

                        <table class="table table-bordered" id="proveedor_table">
                            <thead>
                                <tr>
                                    <th>Nombre del proveedor</th>
                                    <th>Email de contacto</th>
                                    <th>Telefono de contacto</th>
                                    <th>Direccion</th>
                                    <th>Comentario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedors as $proveedor)
                                <tr>
                                    <td>{{$proveedor->nombre}}</td>
                                    <td>{{$proveedor->emailContacto}}</td>
                                    <td>{{$proveedor->telefonoContacto}}</td>
                                    <td>{{$proveedor->direccion}}</td>
                                    <td>{{$proveedor->comentario}}</td>
                                    <td>
                                        <a href="{{ route('admin.proveedors.edit', $proveedor->id) }}" class="btn btn-success">
                                            Editar
                                        </a>

                                        <form action="{{ route('admin.proveedors.destroy', $proveedor->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
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
        $('#proveedor_table').DataTable();
    });
</script>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#proveedor_table').DataTable();
    });
</script>
@endsection