<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        return view('clientes.index');
    }
    public function create()
    {
        return view('clientes.create');
    }
    public function edit()
    {
        return view('clientes.edit');
    }
    // Método para guardar un cliente
    public function store(Request $request)
    {
        // Lógica para guardar el cliente
        // Por ejemplo:
        // Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }

    // Método para mostrar un cliente específico
    public function show($id)
    {
        return view('clientes.show', ['id' => $id]);
    }
}
