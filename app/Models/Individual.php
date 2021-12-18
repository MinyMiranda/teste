<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'individual';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'birthday',
        'cpf'
    ];
 
}
