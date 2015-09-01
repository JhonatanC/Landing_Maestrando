<?php

namespace App\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class MaestUniversity extends Model
{
    protected $table = 'maest_universities';

    public function getNombre()
    {
        return $this->nombre;
    }
    public function MaestLanding()
    {
        return $this->hasOne('App\Admin\Repositories\MaestUniversity','id');
    }
}
