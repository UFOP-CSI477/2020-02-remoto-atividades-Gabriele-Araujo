<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Financas;

use App\Http\Requests\FinancasRequest;

class FinancasController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $objFinancas;

    public function __construct()
    {
        $this->objFinancas=new Financas();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financa = Financas::orderBy('name')->get();
        return view('banco', ['financa'=>$financa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FinancasRequest $request)
    {
        Financas::create($request->all());
        session()->flash('mensagem', 'Recebimento cadastrado com sucesso!');
        return redirect()->route('financas.index');
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
    public function edit(Financas $financa)
    {
        return view('financas.edit', ['financa'=>$financa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FinancasRequest $request, Financas $financa)
    {
        $financa->fill($request->all());
        $financa->save();

        session()->flash('mensagem', 'Recebimento atualizado com sucesso!');
        return redirect()->route('financas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delF=$this->objFinancas->destroy($id);
        return($delF)?"sim":"não";
    }
}
