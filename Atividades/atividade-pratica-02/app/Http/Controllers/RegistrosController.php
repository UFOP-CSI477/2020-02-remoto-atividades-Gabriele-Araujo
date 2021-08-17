<?php

namespace App\Http\Controllers;
use App\Models\Registros;
use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    private $objRegistros;

    public function __construct()
    {
        $this->objRegistros=new Registros();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = Registros::orderBy('id')->paginate(2);
        return view('registros.index', ['registro'=>$registro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('registros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BancoRequest $request)
    {
        //Equipamentos::create($request->all());
        //session()->flash('mensagem', 'Estado cadastrado com sucesso!');
        //return redirect()->route('equipamentos.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamentos $equipamento)
    {
        //return view('registros.show', ['registro'=>$registro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamentos $equipamento)
    {
        //return view('equipamentos.edit', ['registro'=>$registro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipamentos  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BancoRequest $request, Equipamentos $equipamento)
    {
        //$equipamento->fill($request->all());
        //$equipamento->save();

        //session()->flash('mensagem', 'Equipamento atualizado com sucesso!');
        //return redirect()->route('equipamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$del=$this->objEquipamento->destroy($id);
        //return($del)?"sim":"não";
    }
}
