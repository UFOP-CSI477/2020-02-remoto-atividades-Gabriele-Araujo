<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registros;
use App\Models\Pessoas;
use App\Models\Unidades;
use App\Models\Vacinas;
use App\Http\Requests\RegistrosRequest;
class RegistrosController extends Controller
{
    private $objRegistros;
    private $objPessoas;
    private $objUnidades;
    private $objVacina;

    public function __construct()
    {
        $this->objRegistros = new Registros();
        $this->objPessoas = new Pessoas();
        $this->objUnidades = new Unidades();
        $this->objVacina = new Vacinas();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = Registros::orderBy('id')->get();
        return view('registros.index', ['registro', $registro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoa = Pessoas::get();
        $unidade = Unidades::get();
        $vacina = Vacinas::get();
        return view('registros.create', ['pessoa'=>$pessoa], ['unidade'=>$unidade], ['vacina'=>$vacina]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrosRequest $request)
    {
        Registros::create($request->all());
        session()->flash('mensagem', 'Registro criado com sucesso!');
        return redirect()->route('registros.index');
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
    public function edit(Registros $registro)
    {
        return view('registros.edit', ['registro'=>$registro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegistroRequest $request, Registros $registro)
    {
        $registro->fill($request->all());
        $registro->save();

        session()->flash('mensagem', 'Registro atualizada com sucesso!');
        return redirect()->route('registros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delReg=$this->objRegistros->destroy($id);
        return($delReg)?"sim":"não";
    }
}
