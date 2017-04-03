<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cidades;

use App\User;
use Session;
use Auth;
use Gate;
use DB;
use App\Estados;

class Api extends Controller
{

    public function lista(Cidades $cidade, Estados $estado){
        $cidades = DB::table('cidades')->orderBy('cidade')->get();
        $data_floraplac = DB::table('floraplac')->get();

        $return = array_merge($cidades->toArray(), $data_floraplac->toArray());
        return response()->json($return);
        

    }
    public function estados(Cidades $cidade){
        $dados = DB::table('cidades')
        ->select('estado');

        $data_floraplac = DB::table('floraplac')
        ->select('estado')
        ->groupBy('estado')
        ->union($dados)
        ->get();

        return response()->json($data_floraplac);
    }
    
    public function data_floraplac(){
    	$data_f= DB::table('floraplac')->get();
    	return response()->json($data_f);
    }

  
}


