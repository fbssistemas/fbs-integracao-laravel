<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonType extends Model
{
    protected $table = 'person_types';
    protected $fillable = [
        'name',
        'description'
    ];
}
