<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function communes()
    {
        return $this->hasMany(Commune::class);
    }
}
