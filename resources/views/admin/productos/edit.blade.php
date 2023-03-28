@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Editar Pedido</h1>
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
                        <form method="POST" action="{{route('admin.pedidos.update', $pedido->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="comentarioCocina" class="required">Comentario</label>
                                <input type="text" name="comentarioCocina" id="comentarioCocina" class="form-control {{$errors->has('comentarioCocina') ? 'is-invalid' : ''}}" placeholder="Ingrese el nombre del proyecto" value="{{old('comentarioCocina', $pedido->comentarioCocina)}}">
                                @if ($errors->has('name'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('comentarioCocina') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="cantidadProductos" class="required">Cantidad productos</label>
                                <textarea name="cantidadProductos" class="form-control">{{old('cantidadProductos', $pedido->cantidadProductos)}}</textarea>
                                @if ($errors->has('cantidadProductos'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('cantidadProductos') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="fechaPedido" class="required">Fecha de realización del pedido</label>
                                <input name="fechaPedido" type="text" class="form-control date" value="{{ old('fechaPedido', $pedido->fechaPedido) }}">
                            </div>
                            <div class="form-group">
                                <label for="fechaEntrega" class="required">Fecha de entrega límite</label>
                                <input name="fechaEntrega" type="text" class="form-control date" value="{{ old('fechaEntrega', $pedido->fechaEntrega) }}">
                            </div>
                            <div class="form-group">
                                <label for="user_id" class="required">Usuario</label>
                                <select class="form-control select2" name="user_id" style="width: 100%;">
                                    <option value="">Seleccione un usuario</option>
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{(old('user_id') ? old('user_id') : $pedido->user->id ?? '') == $user->id ? 'selected' : ''}}>
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
                                <label for="client_id" class="required">Proveedor</label>
                                <select class="form-control select2" name="proveedor_id" style="width: 100%;">
                                    <option value="">Seleccione un proveedor</option>
                                    @foreach ($proveedors as $proveedor)
                                    <option value="{{ $proveedor->id }}" {{(old('proveedor_id') ? old('proveedor_id') : $pedido->proveedor->id ?? '' ) == $proveedor->id ? 'selected' : ''}}>
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
                                <label for="estado">Status del proyecto</label>
                                <select class="form-control {{ $errors->has('estado') ? 'is-invalid' : '' }}" name="estado" id="estado" required>
                                    <option value="">Seleccione un status</option>
                                    @foreach(App\Models\Pedido::STATUS as $estado)
                                    <option value="{{ $estado }}" {{ (old('estado') ? old('estado') : $pedido->estado ?? '') == $estado ? 'selected' : '' }}>{{ $estado }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('estado'))
                                <div class="text-danger">
                                    {{ $errors->first('estado') }}
                                </div>
                                @endif
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{route('admin.pedidos.index')}}">
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