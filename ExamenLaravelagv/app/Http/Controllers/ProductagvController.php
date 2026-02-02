<?php

namespace App\Http\Controllers;

use App\Models\Productagv;
use Illuminate\Http\Request;

class ProductagvController extends Controller
{
    
    public function index()
    {
        $products = Productagv::all();
        return view('productsagv.indexagv', compact('products'));
    }

    
    public function create()
    {
        return view('productsagv.createagv');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer'
        ]);

        Productagv::create($request->all());

        return redirect()->route('productsagv.index')
            ->with('success', 'Producto creado correctamente');
    }

    
    public function edit(Productagv $productsagv)
    {
        return view('productsagv.editagv', compact('productsagv'));
    }

   
    public function update(Request $request, Productagv $productsagv)
    {
        $request->validate([
            'name'  => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer'
        ]);

        $productsagv->update($request->all());

        return redirect()->route('productsagv.index')
            ->with('success', 'Producto actualizado correctamente');
    }

   
    public function destroy(Productagv $productsagv)
    {
        $productsagv->delete();

        return redirect()->route('productsagv.index')
            ->with('success', 'Producto eliminado correctamente');
    }
}
