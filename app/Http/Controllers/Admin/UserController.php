<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Admin\User; //se modifico la ruta del modelo User
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

        //tercera forma - RECOMENDADA
        // return view('admin.user.index', [
        //     'pruebaValor' => $pruebaValor,
        //     'parametro' => $texto,
        // ]);

        //listar los usuarios existentes en la base ded atos
        // $users = User::all(); extrae todos los usuarios de db

        $users = User::paginate(10); // hace filtrado por paginas

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
        //crear un nuevo usario - retornar la vista
        return view('admin.user.create', [
            //'users' => $users,
        ]);
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //almacenar el dato recibido de la vista admin.user.create

        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->username);

        //modificar despues
        $user->created_by = 1; //TODO eliminar este paso porque se obtendra del usuario en sesion
        $user->updated_by = 1; //TODO eliminar este paso porque se obtendra del usuario en sesion

        //guardar en la base
        $user->save();

        //redireccionar despues de guardar
        return redirect()->route('admin.user.show', $user->id);


        //dd($request->all(), $user);
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) // aquie aplicamos modal-bindind
    {
        //$user = User::where('id', $id)->first();

        // mandar informacion del objeto en formato json
        // $user->link_edit = route('admin.user.show', $user->id); // se crea una varia y se le asigna la ruta actual del user
        // return $user;

        //dd($user) para generar el valor o registro almacenado en la base

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
    public function update(Request $request, User $user)
    {
        //metodo para actualizar
        //dd($id, $request->all()); -- para pobrar los que recibimos del formulario al momento de actualizar

        // **** METODO 1 *****
        // $user->firstname = $request->firstname;
        // $user->lastname = $request->lastname;
        // $user->username = $request->username;
        // $user->email = $request->email;
        // $user->start_date = $request->start_date;
        // //guardamos los cambios
        //$user->save();



        // **** METODO 2 *****
        $user->fill($request->all())->save();

        //redireccionamos a la vista show
        return redirect()->route('admin.user.show', $user->id);

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
