<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
	protected $fillable = ['cidade', 'estado', 'endereco', 'numero', 'complemento', 'bairro','CEP', 'empresa', 'telefone','email', 'site'];
   
	protected $table = 'cidades';


	public $timestamps = false;

	public function user()
	{
		return $this->belongsTo('App\User');
	}

    public function by(User $user){
    	$this->id = $user->id;
    }

}
