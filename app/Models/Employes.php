<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
    use HasFactory;
    protected $fillable=['prenom','nom','email','télephone','agence_id','adresse'];

    public function agence_func(){
        return $this->hasOne(Agence::class,'id','agence_id');
    }
}
