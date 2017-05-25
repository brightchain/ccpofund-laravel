<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;

class Social extends Model
{
    //
    
    protected $fillable=['title','thumbnail','content','order'];


}
