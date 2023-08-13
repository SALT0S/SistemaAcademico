@extends('layouts.appadmin')

@section('content')

    <div class="row">
        <div class="col-md-4">
            <h3>LISTADO DE DOCENTES</h3>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <a href="{{ route('docentes.create') }}" class="btn btn-success">Agregar</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <table class="table table-striped" id="tableUsuarios">
                <thead>
                <tr>
                    <th>#</th>
                    <th>CORREO</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>FECHA NACIMIENTO</th>
                    <th>CORREO</th>
                    <th>TELÉFONO</th>
                    <th>ESTADO</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0 ">

                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('scripts')

@endsection
