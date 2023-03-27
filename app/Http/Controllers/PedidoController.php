<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Models\Proveedor;
use App\Models\User;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::with(['proveedor', 'user'])->get();
        return view('admin.pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $proveedors = Proveedor::all();
        return view('admin.pedidos.create', compact('users','proveedors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePedidoRequest $request)
    {
        Pedido::create($request->validated());

        return redirect()->route('admin.pedidos.index')->with('success','Pedido creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        $users = User::all();

        $pedido = Pedido::all();

        return view('admin.projects.edit', compact('users', 'clients', 'project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePedidoRequest $request, Pedido $pedido)
    {
        $pedido->update($request->validated());

        return redirect()->route('admin.pedidos.index')->with('success', 'Pedido editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();

        return back();
    }
}
