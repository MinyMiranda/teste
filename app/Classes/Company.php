<?php

namespace App\Classes;

use App\Interfaces\Person;

class Company implements Person
{
    private $fantasy_name;
    private $cnpj;

    public function toArray()
    {
    }

    public static function set($fantasy_name, $cnpj){

    }
}
