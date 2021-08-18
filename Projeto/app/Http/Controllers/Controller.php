<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(){
        //return view('login');
    }

    public function painel(){
        return view('painel');
    }

    public function despesas(){
        return view('despesas');
    }

    public function banco(){
        return view('banco');
    }

    public function usuario(){
        //return view('usuario');
    }
}
