<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Dummy extends Model
{
    use HasFactory;

    protected $table = 'Dummy';

    protected $guarded = [];


    function firstname(): Attribute
    {
        return Attribute::make(
            get: fn($value,$attribute)=>$attribute['first_name'].' '.$attribute['last_name']
        );

    }
}
