<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    //
    protected $table = 'periode';
    protected $fillable = [
        'tahun',
        'semester',
        'created_at',
        'updated_at'
    ];
}
