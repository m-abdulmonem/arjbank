<?php

namespace Mabdulmonem\ArjBank\Facades;

use Illuminate\Support\Facades\Facade;

class ArjBank extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ArjBank';
    }
}

