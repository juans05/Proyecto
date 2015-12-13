<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 08/11/2015
 * Time: 10:20
 */

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Entity extends  Model
{

    public static function getClass(){
        return get_class(new static);
    }

}