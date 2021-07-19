<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table='book';
    protected $fillable=['id_user','titulo','autor','sinopse','tipocapa','codigoisbn','foto'];

    public function relUsers(){
        return $this->hasOne('App\User', 'id', 'id_user');
    }
}
