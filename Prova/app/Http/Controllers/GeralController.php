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

        $dose0 = Vacinas::where('doses', 0)->count();
        $dose1 = Vacinas::where('doses', 1)->count();
        $dose2 = Vacinas::where('doses', 2)->count();

        $vacina = Vacinas::get('nome');
        
        return view('geral', ['dose0'=>$dose0, 'dose1'=>$dose1, 'dose2'=>$dose2, 'vacina'=>$vacina]);
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
