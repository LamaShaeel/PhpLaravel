<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    
    protected $fillable= [
        'itemName',
        'price' ,
        'quantity',
        'color',
        'itemGroupId',
        'image',

    ];
}
