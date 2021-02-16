<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Admin\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //enviar un valor a la vista
        // $pruebaValor = 'prueba de variable en la vista 2';
        // $texto = 'Este es otro contenido';

        //retornar un mensaje de prueba
        // return view('admin.user.index', compact('pruebaValor'));

        //segunda forma
        // return view('admin.user.index')
        //     ->with('pruebaValor', $pruebaValor)
        //     ->with('pruebaValor2', $pruebaValor2);

        //tercera forma
        // return view('admin.user.index', [
        //     'pruebaValor' => $pruebaValor,
        //     'parametro' => $texto,
        // ]);

        //listar losusuarios existentes en la base ded atos
        // $users = User::all(); extrae todos los usuarios de db

        $users = User::paginate(10); // muestra 3 registros por pagina

        return view('admin.user.index', [
            'users' => $users,
        ]);
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
        $user = User::where('id', $id)->first();
        //dd($user) para generar el vlaor o registro almacenado en la base
        return view('admin.user.show', [
            'user' => $user
        ]);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
