<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    //
    public $timestamps = true;

    protected $fillable = ['name', 'title', 'config', 'create_at', 'update_at'];


//    protected $guarded = [];

}