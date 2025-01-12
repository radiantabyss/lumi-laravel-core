<?php
namespace RA\Support\Facades;

use Illuminate\Support\Facades\Facade;

class SeoFacade extends Facade
{
    protected static function getFacadeAccessor() { return '\RA\Support\Helpers\SeoHelper'; }
}
