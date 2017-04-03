<?php

namespace App\Http\Controllers;

use App\Cidades;

use Illuminate\Http\Request;

use App\User;
use Session;
use Auth;
use Gate;
use DB;

class Representantes extends Controller
{
    function __construct(){
        $this->middleware('auth');
        $this->estates = array(
                'AC'=>'Acre',
                'AL'=>'Alagoas',
                'AP'=>'Amapá',
                'AM'=>'Amazonas',
                'BA'=>'Bahia',
                'CE'=>'Ceará',
                'DF'=>'Distrito Federal',
                'ES'=>'Espírito Santo',
                'GO'=>'Goiás',
                'MA'=>'Maranhão',
                'MT'=>'Mato Grosso',
                'MS'=>'Mato Grosso do Sul',
                'MG'=>'Minas Gerais',
                'PA'=>'Pará',
                'PB'=>'Paraíba',
                'PR'=>'Paraná',
                'PE'=>'Pernambuco',
                'PI'=>'Piauí',
                'RJ'=>'Rio de Janeiro',
                'RN'=>'Rio Grande do Norte',
                'RS'=>'Rio Grande do Sul',
                'RO'=>'Rondônia',
                'RR'=>'Roraima',
                'SC'=>'Santa Catarina',
                'SP'=>'São Paulo',
                'SE'=>'Sergipe',
                'TO'=>'Tocantins'
            );
    }

    public function index(User $user, Cidades $cidade){

        $dados = Cidades::all();

            $estates = array(
                'AC'=>'Acre',
                'AL'=>'Alagoas',
                'AP'=>'Amapá',
                'AM'=>'Amazonas',
                'BA'=>'Bahia',
                'CE'=>'Ceará',
                'DF'=>'Distrito Federal',
                'ES'=>'Espírito Santo',
                'GO'=>'Goiás',
                'MA'=>'Maranhão',
                'MT'=>'Mato Grosso',
                'MS'=>'Mato Grosso do Sul',
                'MG'=>'Minas Gerais',
                'PA'=>'Pará',
                'PB'=>'Paraíba',
                'PR'=>'Paraná',
                'PE'=>'Pernambuco',
                'PI'=>'Piauí',
                'RJ'=>'Rio de Janeiro',
                'RN'=>'Rio Grande do Norte',
                'RS'=>'Rio Grande do Sul',
                'RO'=>'Rondônia',
                'RR'=>'Roraima',
                'SC'=>'Santa Catarina',
                'SP'=>'São Paulo',
                'SE'=>'Sergipe',
                'TO'=>'Tocantins'
            );

    	return view('admin.representantes', compact('dados', 'estates'));
    }

    public function save(Request $request, Cidades $cidade, User $user){

		$this->validate($request, [
    		'empresa' => 'required',
    		'estado' => 'required'
	    ]);
  
		$cidade->insert([
            'user_id' => Auth::id(),
    		'cidade' => $request['cidade'],
    		'estado' => $request['estado'],
    		'endereco' => $request['endereco'],
    		'numero' => $request['numero'],
    		'complemento' => $request['complemento'],
    		'bairro' => $request['bairro'],
    		'CEP' => $request['CEP'],
    		'empresa' => $request['empresa'],
    		'telefone' => $request['telefone'],
    		'email' => $request['email'],
    		'site' => $request['site'],
    	]);

    	return redirect('representantes');
    }

    public function find(Cidades $cidade,User $user, $id){

        $dados = Cidades::all();

        $representante = $cidade->where('id', $id)->get();

        $estates = array(
                'AC'=>'Acre',
                'AL'=>'Alagoas',
                'AP'=>'Amapá',
                'AM'=>'Amazonas',
                'BA'=>'Bahia',
                'CE'=>'Ceará',
                'DF'=>'Distrito Federal',
                'ES'=>'Espírito Santo',
                'GO'=>'Goiás',
                'MA'=>'Maranhão',
                'MT'=>'Mato Grosso',
                'MS'=>'Mato Grosso do Sul',
                'MG'=>'Minas Gerais',
                'PA'=>'Pará',
                'PB'=>'Paraíba',
                'PR'=>'Paraná',
                'PE'=>'Pernambuco',
                'PI'=>'Piauí',
                'RJ'=>'Rio de Janeiro',
                'RN'=>'Rio Grande do Norte',
                'RS'=>'Rio Grande do Sul',
                'RO'=>'Rondônia',
                'RR'=>'Roraima',
                'SC'=>'Santa Catarina',
                'SP'=>'São Paulo',
                'SE'=>'Sergipe',
                'TO'=>'Tocantins'
            );

        return view('admin.representantes', compact('representante', 'estates','dados'));
    }

    public function update(Request $request, $id, Cidades $cidade){

        $this->validate($request, [
            'empresa' => 'required',
    		'estado' => 'required'
        ]);
  
        $cidade->where('id', $id)->update([
            'cidade' => $request['cidade'],
            'estado' => $request['estado'],
            'endereco' => $request['endereco'],
            'numero' => $request['numero'],
            'complemento' => $request['complemento'],
            'bairro' => $request['bairro'],
            'CEP' => $request['CEP'],
            'empresa' => $request['empresa'],
            'telefone' => $request['telefone'],
            'email' => $request['email'],
            'site' => $request['site'],
        ]);

        return redirect('representantes/');
    }

   	public function delete(User $user, Cidades $cidade, $id){
        $del = $cidade->destroy($id);
        return redirect('representantes');
    }

    public function estados(Cidades $cidade){
        $dados = DB::table('cidades')
        ->select(DB::raw('estado, count(*) as quantidade'))
        ->groupBy('estado')
        ->get();

        return response()->json($dados);
    }

    public function floraplac(){

        $data_floraplac = DB::table('floraplac')->get();

        return view('admin.floraplac', compact('data_floraplac'));
    }

    public function update_f(Request $request, $id){
        $this->validate($request, [
            'texto' => 'required'
        ]);
          
        DB::table('floraplac')->where('id', $id)->update([
            'texto' => $request['texto'],
        ]);

        return redirect('floraplac');

    }

    public function find_f($id){

        $estates = $this->estates;

        $item = DB::table('floraplac')->where('id', $id)->get();

        return view('admin.floraplac_edit', compact('item','estates'));
    }

    public function delete_f($id){
        $del = DB::table('floraplac')->delete($id);
        return redirect('floraplac');
    }
}


