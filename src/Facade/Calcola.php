<?php

namespace Devmauro\Calculator\Facade;

use Illuminate\Support\Facades\Facade;

class Calcola extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'calcola';
    }
}