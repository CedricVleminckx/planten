<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plants extends Model
{
    protected $fillable = ['name', 'latinName', 'description', 'type', 'flowers', 'winterHard', 'height', 'moisture', 'light', 'groundType', 'edible', 'dealer', 'link', 'picture'];

    public $timestamps = false;
}
