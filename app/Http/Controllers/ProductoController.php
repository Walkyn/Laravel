<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Log;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::paginate(9);
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function edit($codigo)
    {
        $producto = Producto::findOrFail($codigo);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $codigo)
    {
        $validatedData = $request->validate([
            'codigo' => 'required|string|max:50',
            'producto' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'precio_costo' => 'required|numeric',
            'precio_venta' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $producto = Producto::findOrFail($codigo);

        dd($producto, $validatedData);

        $producto->update($validatedData);

        return redirect()->route('productos.index')->with('mensaje', 'Producto actualizado correctamente');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }

    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index')->with('mensaje', 'Producto agregado con éxito');
    }
}
