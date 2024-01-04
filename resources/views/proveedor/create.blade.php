@extends('plantilla.plantilla')

@section('content')
    <div class="container" style="max-width: 600px;">
        <h1 class="text-center">Guardar Proveedor</h1>
        <form method="POST" action="{{ route('proveedor.store') }}" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label for="prov_id" class="col-sm-2 control-label">ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prov_id" name="prov_id"
                        maxlength="7"
                    >
                </div>
            </div>
            <div class="form-group">
                <label for="prov_empresa" class="col-sm-2 control-label">Empresa:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prov_empresa" name="prov_empresa"
                        maxlength="20"
                    >
                </div>
            </div>
            <div class="form-group">
                <label for="prov_vendedor" class="col-sm-2 control-label">Vendedor:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prov_vendedor" name="prov_vendedor"
                        maxlength="40"
                    >
                </div>
            </div>
            <div class="form-group">
                <label for="prov_contacto" class="col-sm-2 control-label">Contacto:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prov_contacto" name="prov_contacto"
                    maxlength="10">
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2 text-center">
                    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                    <a href="{{ route('proveedor.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection
