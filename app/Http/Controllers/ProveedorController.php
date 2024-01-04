<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $proveedores = Proveedor::orderBy('prov_id', 'ASC')->paginate(3);
        return view('proveedor.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'prov_id' => 'required',
            'prov_empresa' => 'required',
            'prov_vendedor' => 'required',
            'prov_contacto' => 'required',
        ]);
        Proveedor::create($request->all());
        return redirect()->route('proveedor.index')->with('success', 'Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $proveedores = Proveedor::find($id);
        return view('proveedor.show', compact('proveedores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $proveedor = Proveedor::find($id);
        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this->validate($request, [
            'prov_id' => 'required',
            'prov_empresa' => 'required',
            'prov_vendedor' => 'required',
            'prov_contacto' => 'required',
        ]);
        Proveedor::find($id)->update($request->all());
        return redirect()->route('proveedor.index')->with('success', 'Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Proveedor::find($id)->delete();
        return redirect()->route('proveedor.index')->with('success', 'Registro eliminado satisfactoriamente');
    }
}
