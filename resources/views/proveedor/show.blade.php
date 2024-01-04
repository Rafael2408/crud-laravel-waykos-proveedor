@extends('plantilla.plantilla')

@section('content')
    <h1 class="mb-4">Proveedor: {{ $proveedores->prov_empresa }}</h1>
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $proveedores->prov_id }}</td>
            </tr>
            <tr>
                <th>Empresa</th>
                <td>{{ $proveedores->prov_empresa }}</td>
            </tr>
            <tr>
                <th>Vendedor</th>
                <td>{{ $proveedores->prov_vendedor }}</td>
            </tr>
            <tr>
                <th>Contacto</th>
                <td>{{ $proveedores->prov_contacto }}</td>
            </tr>
        </tbody>
    </table>
    <a href={{ route('proveedor.index') }} class="btn btn-primary mt-3">Volver al Inicio</a>
@endsection
