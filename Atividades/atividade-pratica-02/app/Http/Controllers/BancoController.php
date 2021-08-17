<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Models\Equipamentos;
use App\Models\User;
use App\Http\Requests\BancoRequest;

class BancoController extends Controller
{
    private $objUser;
    private $objEquipamento;

    public function __construct()
    {
        $this->objUser=new User();
        $this->objEquipamento=new Equipamentos();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamento = Equipamentos::orderBy('id')->get();
        return view('index', ['equipamento'=>$equipamento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BancoRequest $request)
    {
        Equipamentos::create($request->all());
        session()->flash('mensagem', 'Estado cadastrado com sucesso!');
        return redirect()->route('equipamentos.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamentos $equipamento)
    {
        return view('equipamentos.show', ['equipamento'=>$equipamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamentos $equipamento)
    {
        return view('equipamentos.edit', ['equipamento'=>$equipamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BancoRequest $request, $id)
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
