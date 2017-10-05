<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use View;
class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('people');
    }

    public function showTable()
    {
        return Datatables::of(People::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPerson');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regla = [
            'name'=>'required',
            'surname'=>'required',
            'sex'=>'required',
            'birthday'=>'required',
        ];
        
        $valida = Validator::make($request->all(),$regla);

        if ($valida->fails()) {
        return ['status' => false,
                'errors' => $valida->messages()];
        }

        People::create([
            'name' => $request->name,
            'surname'=>$request->surname,
            'sex'=>$request->sex,
            'birthday'=>$request->birthday,
            'created_at' => date('Y-m-d h:i:s')
        ]);

        //return ['status'=>true,'out'=>'reload'];
        //return ['status'=>true,'out'=>'redirect','route'=>route('home')];
        return ['status'=>true,'out'=>'alert','title'=>'Atención','html'=>'Estado se guardó <b>éxitosamente</b>'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = People::findOrFail($id);
        $dat = ["u"=>$data];
        $html = View::make('viewPeople',$dat)->render();
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
        $u = People::findOrFail($id);
        
        return view('editPerson', ["u" => $u]);
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
        $u = People::findOrFail($id);
        
        $regla = [
            'name'=>'required',
            'surname'=>'required',
            'sex'=>'required',
            'birthday'=>'required',
        ];
        $valida = Validator::make($request->all(),$regla);
        
        if ($valida->fails()) {
            return ['status' => false,
                    'errors' => $valida->messages()];
        }
        $u->name = $request->name;
        $u->surname = $request->surname;
        $u->sex = $request->sex;
        $u->birthday = $request->birthday;
        $u->save();

        return ['status'=>true,
                'out'=>'redirect',
                "route" => route('people.index')];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = People::findOrFail($id);
        $u->delete();

        return ['status'=>true,
                'out'=>'redirect', 
                'route'=>route('estado.index')];
    }
}
