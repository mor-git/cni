<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cni extends Model 
{
    //
    protected $fillable = ["numero","nom", "prenom","genre","age","cni_numero","adresse","telephone","departement"];
}
