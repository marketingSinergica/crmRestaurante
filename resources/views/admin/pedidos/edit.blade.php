@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Editar Proveedor</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        
                        <form method="POST" action="{{route('admin.proveedors.update', $proveedor->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="contact_name" class="required">Nombre del Proveedor </label>
                                <input type="text" name="nombre" id="contact_name" class="form-control {{$errors->has('nombre') ? 'is-invalid' : ''}}" placeholder="Ingrese el nombre del proveedor" value="{{old('nombre', $proveedor->nombre)}}">
                                @if ($errors->has('nombre'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="cantidadProductos" class="required">Nombre del Proveedor </label>
                                <input type="text" name="cantidadProductos" id="contact_name" class="form-control {{$errors->has('nombre') ? 'is-invalid' : ''}}" placeholder="Ingrese el nombre del proveedor" value="{{old('cantidadProductos', $proveedor->nombre)}}">
                                @if ($errors->has('nombre'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('cantidadProductos') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="telefonoContacto" class="required">Teléfono de contacto del proveedor</label>
                                <input type="text" name="telefonoContacto" id="telefonoContacto" class="form-control {{$errors->has('telefonoContacto') ? 'is-invalid' : ''}}" placeholder="Ingrese el teléfono del proveedor" value="{{old('telefonoContacto', $proveedor->telefonoContacto)}}">
                                @if ($errors->has('telefonoContacto'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('telefonoContacto') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="emailContacto" class="required">Email del proveedor </label>
                                <input type="email" name="emailContacto" id="emailContacto" class="form-control {{$errors->has('emailContacto') ? 'is-invalid' : ''}}" placeholder="Ingrese el email del proveedor" value="{{old('emailContacto', $proveedor->emailContacto)}}">
                                @if ($errors->has('emailContacto'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('emailContacto') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="direccion" class="required">Dirección de la empresa</label>
                                <input type="text" name="direccion" id="direccion" class="form-control {{$errors->has('direccion') ? 'is-invalid' : ''}}" placeholder="Ingrese la dirección" value="{{old('direccion', $proveedor->direccion)}}">
                                @if ($errors->has('direccion'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="comentario" class="required">Comentario</label>
                                <input type="text" name="comentario" id="comentario" class="form-control {{$errors->has('comentario') ? 'is-invalid' : ''}}" placeholder="El horario de entrega es..." value="{{old('comentario', $proveedor->comentario)}}">
                                @if ($errors->has('comentario'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('comentario') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{route('admin.proveedors.index')}}">
                                        <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                        Regresar
                                    </a>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Editar
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection