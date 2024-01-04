@extends('plantilla.plantilla')

@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="pull-left">
                            <h3>Lista Proveedores</h3>
                        </div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('proveedor.create') }}" class="btn btn-info">Añadir Proveedor</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Empresa</th>
                                    <th>Vendedor</th>
                                    <th>Contacto</th>
                                    <th>Ver</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                    @if ($proveedores->count())
                                        @foreach ($proveedores as $proveedor)
                                            <tr>
                                                <td>{{ $proveedor->prov_id }}</td>
                                                <td>{{ $proveedor->prov_empresa }}</td>
                                                <td>{{ $proveedor->prov_vendedor }}</td>
                                                <td>{{ $proveedor->prov_contacto }}</td>
                                                <td>
                                                    <a class="btn btn-success btn-xs"
                                                        href="{{ route('proveedor.show', $proveedor->prov_id) }}">
                                                        <span class="glyphicon glyphicon-eye-open"></span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-xs"
                                                        href="{{ route('proveedor.edit', $proveedor->prov_id) }}">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('proveedor.destroy', $proveedor->prov_id) }}"
                                                        method="post">
                                                        {{ csrf_field() }}
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button class="btn btn-danger btn-xs" type="submit">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6">No hay registro !!</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $proveedores->links() }}
                </div>
            </div>
        </section>
    @endsection
