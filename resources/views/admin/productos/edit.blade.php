@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Editar Producto</h1>
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
                        <form method="POST" action="{{route('admin.productos.update', $producto->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombre" class="required">Producto</label>
                                <input type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre') ? 'is-invalid' : ''}}" placeholder="Ingrese el nombre del producto" value="{{old('nombre', $producto->nombre)}}">
                                @if ($errors->has('nombre'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="cantidad" class="required">Cantidad</label>
                                <textarea name="cantidad" class="form-control">{{old('cantidad', $producto->cantidad)}}</textarea>
                                @if ($errors->has('cantidad'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('cantidad') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="formato" class="required">Formato</label>
                                <textarea name="formato" class="form-control">{{old('formato', $producto->formato)}}</textarea>
                                @if ($errors->has('formato'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('formato') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="comentario" class="required">Comentario</label>
                                <textarea name="comentario" class="form-control">{{old('comentario', $producto->comentario)}}</textarea>
                                @if ($errors->has('comentario'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('comentario') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="user_id" class="required">Usuario</label>
                                <select class="form-control select2" name="user_id" style="width: 100%;">
                                    <option value="">Seleccione un usuario</option>
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{(old('user_id') ? old('user_id') : $producto->user->id ?? '' ) == $user->id ? 'selected' : ''}}>
                                        {{ $user->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('user_id'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('user_id') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="proveedor_id" class="required">Proveedor</label>
                                <select class="form-control select2" name="proveedor_id" style="width: 100%;">
                                    <option value="">Seleccione un proveedor</option>
                                    @foreach ($proveedors as $proveedor)
                                    <option value="{{ $proveedor->id }}" {{(old('proveedor_id') ? old('proveedor_id') : $producto->proveedor->id ?? '' ) == $proveedor->id ? 'selected' : ''}}>{{ $proveedor->nombre }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('proveedor_id'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('proveedor_id') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="pedido_id" class="required">Pedido</label>
                                <select class="form-control select2" name="pedido_id" style="width: 100%;">
                                    <option value="">Seleccione un proyecto</option>
                                    @foreach ($pedidos as $pedido)
                                    <option value="{{ $pedido->id }}" {{(old('pedido_id') ? old('pedido_id') : $producto->pedido->id ?? '' ) == $pedido->id ? 'selected' : ''}}>{{ $pedido->id }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('pedido_id'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('pedido_id') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{route('admin.productos.index')}}">
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