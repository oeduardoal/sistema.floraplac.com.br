<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
 	public function floraplac(){
 		 return $this->hasMany('App\Floraplac');
 	}
 	public function Cidades(){
 		 return $this->hasMany('App\Cidades');
 	}
}
