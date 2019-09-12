<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name','pricing_type','pricing_value','type','timely_changeable'];
}
