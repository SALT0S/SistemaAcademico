@extends('layouts.appadmin')

@section('content')
    <h3>usuarios</h3>
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
    <script>
        var tableUsers;
        var getUsersUrl = "{{ route('getusers') }}".replace(/^http:/, 'https:');


    </script>
    <script src="{{ asset('assets/js/users.js') }}?v=1.0"></script>
@endsection
