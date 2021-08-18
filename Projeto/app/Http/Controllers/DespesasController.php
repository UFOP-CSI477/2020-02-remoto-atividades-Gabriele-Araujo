<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Despesas;
use Illuminate\Http\Request;

use App\Http\Requests\DespesasRequest;

class DespesasController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $objDespesas;

    public function __construct()
    {
        $this->objDespesas=new Despesas();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despesa = Despesas::orderBy('name')->get();
        return view('despesas', ['despesa'=>$despesa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('despesas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DespesasRequest $request)
    {
        Despesas::create($request->all());
        session()->flash('mensagem', 'Despesa cadastrada com sucesso!');
        return redirect()->route('despesas.index');
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
    public function edit(Despesas $despesa)
    {
        return view('despesas.edit', ['despesa'=>$despesa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DespesasRequest $request, Despesas $despesa)
    {
        $despesa->fill($request->all());
        $despesa->save();

        session()->flash('mensagem', 'Despesa atualizada com sucesso!');
        return redirect()->route('despesas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objDespesas->destroy($id);
        return($del)?"sim":"não";
    }
}
