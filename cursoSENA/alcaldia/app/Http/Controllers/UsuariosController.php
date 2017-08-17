<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Illuminate\Validation\Rule;
use Datatables;
use View;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        $data2 = User::first();

        $arreglo = ["titulo"=>"Alcaldía",
                    "contenido"=>"El contenido",
                    "data"=>$data,"data2"=>$data2];

        return view('usuario.usuario',$arreglo);
    }

    public function showTable()
    {
        return Datatables::of(User::query())->make(true);

        /*$user = User::from('users AS u')
                    ->select('u.id','u.firstname','u.lastname','u.email','u.created_at','u.active')
                    ->join("user_role AS ur","ur.user_id","u.id")
                    ->where('ur.role_id','1');

        return Datatables::of($user)
                    ->filterColumn('u.active', function($query, $keyword) {
                        if($keyword=='si')
                            $busca=1;
                        elseif($keyword=='no')
                            $busca=2;
                        else
                            $busca=$keyword;

                        $query->whereRaw("u.active like ?", ["%{$busca}%"]);
                    })->make(true);*/        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.crearUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regla = ['nombre'=>'required',
                 'correo'=>'required|email|unique:users,email',
                 'contraseña'=>'required|same:confirma_contraseña|min:6|max:20'
                 ];
        
        /*if($request->contraseña!=$request->confirma_contrasena){
            $msj = 'La confirmación de la contraseña es incorrecta';
            return ['res' => false,
                    'error' => ["contrasena"=>[$msj]]
                    ];
        }*/

        $valida = Validator::make($request->all(),$regla);
        
        if ($valida->fails()) {
            return ['error' => true,
                    'msj' => $valida->messages()];
        }

        User::create([
                'name' => $request->nombre,
                'email' => $request->correo,
                'password' => bcrypt($request->contraseña),
                'estado_id' => 1,
                'created_at' => date('Y-m-d h:i:s')
            ]);

        //$res = ['out'=>'redirect','route'=>route('home')];
        //$res = ['out'=>'reload'];
        $res = ['out'=>'alert','title'=>'Registro Éxitoso',
                'html'=>'Se ha <b>guardado</b> correctamente.'];

        return $res;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::findOrFail($id);
        $dat = ["u"=>$data];
        $html = View::make('usuario.verUsuario',$dat)->render();
        return ['title'=>'Detalle','html'=>$html];        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $u = User::findOrFail($id);
        
        return view('usuario.editarUsuario', ["u" => $u]);        
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
        $u = User::findOrFail($id);

        $regla = ['nombre'=>'required',
                 'email'=>['required','email',
                            Rule::unique('users')->ignore($u->email,'email')]
                ];

        $valida = Validator::make($request->all(),$regla);
        
        if ($valida->fails()) {
            return ['error' => true,
                    'msj' => $valida->messages()];
        }        

        $u->name = $request->nombre;
        $u->email = $request->email;
        $u->save();

        return ['error'=>false,
                'out'=>'redirect',
                "route" => route('usuarios.index')];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = User::findOrFail($id);
        $u->delete();

        return ['error'=>false,
                'out'=>'redirect', 
                'route'=>route('usuarios.index')];
    }
}
