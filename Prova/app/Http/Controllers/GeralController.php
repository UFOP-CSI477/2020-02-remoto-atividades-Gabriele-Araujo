<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoas;
use App\Models\Vacinas;
use App\Models\Registros;

class GeralController extends Controller
{
    private $objPessoas;
    private $objVacinas;
    private $objRegistros;

    public function __construct()
    {
        $this->objPessoas = new Pessoas();
        $this->objVacinas = new Vacinas();
        $this->objRegistros = new Registros();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$registros = Registros::get('vacina_id');
        //$vacinasID = Vacinas::where($registros==='id')->get('pessoa_id');
        //$vacinasD = Vacinas::where($registros==='id')->get('dose');
        //$pessoas = Pessoas::where($vacinasID==='id');
        
        //$vacinas = Vacinas::get('nome');
        //$vacinasDose = Vacinas::where($vacinas==='nome')->sum('doses');
        
        return view('geral');
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
