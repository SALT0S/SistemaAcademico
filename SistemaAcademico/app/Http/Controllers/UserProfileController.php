<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user(); // Obtener el usuario autenticado
        $data = [
            'user' => $user,
            'tag_page' => "Perfil de Usuario",
            'page_title' => "Perfil de Usuario",
            'page_name' => "Perfil de Usuario",
        ];
        return view('users.profile', ['user' => $user, 'data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        if($request->tipo == 1){
            if ($request->hasFile('img_profile')) {
                $file = $request->file('img_profile');
                $fileName = $file->getClientOriginalName();
                $file->move('assets/img', $fileName);
                $user = User::findOrFail($id);
                $user->imagen_profile = $fileName;
                $user->save();
                return back()->with('success', 'La imagen se ha actualizado correctamente.');
            } else {
                return back()->withErrors('No se ha enviado ninguna imagen.');
            }
        }else{
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->nombres = $request->nombres;
            $user->apellidos = $request->apellidos;
            $user->telefono = $request->telefono;
            $user->direccion = $request->direccion;
            $user->fecha_nacimiento = $request->fecha_nacimiento;
            $user->correo = $request->correo;
            $user->email = $request->correo;
            $user->save();
            return back()->with('success', 'La Información de Perfil se ha actualizado correctamente.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
