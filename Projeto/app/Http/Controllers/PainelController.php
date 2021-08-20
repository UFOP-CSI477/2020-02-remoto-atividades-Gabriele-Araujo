<?php

namespace App\Http\Controllers;

use App\Models\Financas;
use App\Models\Despesas;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    private $objFinancas;
    private $objDespesas;

    public function __construct()
    {
        $this->objFinancas=new Financas();
        $this->objDespesas=new Despesas();
    }

    public function index(){
        $rendimento = Financas::get()->sum('valor');
        $despesa = Despesas::get()->sum('valor');
        return view('painel', ['rendimento'=>$rendimento], ['despesa'=>$despesa]);
    }

}
