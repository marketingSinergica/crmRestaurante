@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Nuevo Producto</h1>
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

                        <form method="POST" action="{{route('admin.productos.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="nombre" class="required">Producto</label>
                                <input type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre') ? 'is-invalid' : ''}}" placeholder="Ingrese el nombre del producto" value="{{old('nombre', '')}}">
                                @if ($errors->has('nombre'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="cantidad" class="required">Cantidad</label>
                                <input type="text" name="cantidad" id="cantidad" class="form-control {{$errors->has('cantidad') ? 'is-invalid' : ''}}" placeholder="Ingrese la cantidad del producto" value="{{old('cantidad', '')}}">
                                @if ($errors->has('cantidad'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('cantidad') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="formato" class="required">Formato</label>
                                <input type="text" name="formato" id="formato" class="form-control {{$errors->has('formato') ? 'is-invalid' : ''}}" placeholder="Kilos, bandejas, ..." value="{{old('formato', '')}}">
                                @if ($errors->has('formato'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('formato') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="comentario" class="required">Comentario</label>
                                <input type="text" name="comentario" id="comentario" class="form-control {{$errors->has('comentario') ? 'is-invalid' : ''}}" placeholder="Ingrese algún comentario" value="{{old('comentario', '')}}">
                                @if ($errors->has('comentario'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('comentario') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="marca" class="required">Marca</label>
                                <input type="text" name="marca" id="marca" class="form-control {{$errors->has('marca') ? 'is-invalid' : ''}}" placeholder="Ingrese la marca del producto" value="{{old('marca', '')}}">
                                @if ($errors->has('marca'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('marca') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="user_id" class="required">Usuario</label>
                                <select class="form-control select2" name="user_id" style="width: 100%;">
                                    <option value="">Seleccione un usuario</option>
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{old('user_id') == $user->id ? 'selected' : ''}}>
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
                                    <option value="">Seleccione un cliente</option>
                                    @foreach ($proveedors as $proveedor)
                                    <option value="{{ $proveedor->id }}" {{old('proveedor_id') == $proveedor->id ? 'selected' : ''}}>
                                        {{ $proveedor->nombre }}
                                    </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('proveedor_id'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('proveedor_id') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="pedido_id" class="required">Nº Pedido</label>
                                <select class="form-control select2" name="pedido_id" style="width: 100%;">
                                    <option value="">Seleccione un proyecto</option>
                                    @foreach ($pedidos as $pedido)
                                    <option value="{{ $pedido->id }}" {{old('pedido_id') == $pedido->id ? 'selected' : ''}}>
                                        {{ $pedido->id }}
                                    </option>
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
                                    <a class="btn btn-danger" href="{{route('admin.pedidos.index')}}">
                                        <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                        Regresar
                                    </a>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar
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