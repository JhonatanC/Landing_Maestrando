<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminOptionMenu extends Model
{
    protected $table = "admin_option_menus";
    protected $separator;

    public function getTitleAttribute()
    {
        $this->title = $this->atributes['title'];
        return $this->atributes['title'];
    }

    public function getNameAttribute()
    {
        return $this->atributes['name'];
    }
    public function getSlug()
    {
        $separator = "-";
        return str_slug($this->title, $separator);
    }

}
