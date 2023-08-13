@extends('layouts.appadmin')

@section('content')
    <div class="card">
        <div class="card-header">
            {{$data['tag_page']}}
        </div>
        @if ($errors->any())
            <div class="alert alert-danger" id="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" id="success-message">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body">
            <div class="container-xl px-4 mt-4">

                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Foto de Perfil</div>
                            <div class="card-body text-center">
                                <form method="post" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!-- Profile picture image-->
                                    <img class="img-account-profile rounded-circle mb-2" src="{{ asset('assets/img/'.$user->imagen_profile) }}" alt="" width="30%">
                                    <!-- Profile picture help block-->
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_profile">
                                    <div class="small font-italic text-muted mb-4">JPG or PNG no superior a 5 MB</div>
                                    <input type="hidden" name="tipo" value="1">
                                    <!-- Profile picture upload button-->
                                    <button class="btn btn-primary" type="submit">Actualiza tu Foto de Perfil</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Información del Usuario</div>
                            <div class="card-body">
                                <form method="post" action="{{ route('profile.update', $user->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <!-- Form Group (username)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputUsername">Nombre de Registro</label>
                                        <input class="form-control" id="inputUsername" name="name" type="text" placeholder="Ingrese su Email" value="{{ $user->name }}">
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">Nombres Completos</label>
                                            <input class="form-control" id="inputFirstName" name="nombres" type="text" placeholder="Ingrese sus Nombres Completos" value="{{ $user->nombres }}">
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Apellidos Completos</label>
                                            <input class="form-control" id="inputLastName" name="apellidos" type="text" placeholder="Ingrese sus Apellidos Completos" value="{{ $user->apellidos }}">
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (organization name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputOrgName">Fecha de Nacimiento</label>
                                            <input class="form-control" id="inputOrgName" name="fecha_nacimiento" type="date" placeholder="2023-08-07" value="{{ \Carbon\Carbon::parse($user->fecha_nacimiento)->format('Y-m-d') }}">
                                        </div>
                                        <!-- Form Group (location)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLocation">Rol</label>
                                            <input class="form-control" id="inputLocation"  type="text" placeholder="Rol del Usuario" value="{{ $user->id_rol }}">
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" name="correo" placeholder="Ingrese su Email" value="{{ $user->correo }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputLocation">Dirección</label>
                                        <input class="form-control" id="inputLocation" type="text" name="direccion" placeholder="Ingrese su Dirección" value="{{ $user->direccion }}">
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (phone number)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone">Teléfono</label>
                                            <input class="form-control" id="inputPhone" name="telefono" type="tel" placeholder="Ingrese su Numero de Teléfono" value="{{ $user->telefono }}">
                                        </div>

                                    </div>
                                    <input type="hidden" name="tipo" value="2">
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit">Actualizar Información</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        setTimeout(function() {
            document.getElementById('error-message').style.display = 'none';
        }, 5000);
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'none';
        }, 5000);

    </script>
@endsection
