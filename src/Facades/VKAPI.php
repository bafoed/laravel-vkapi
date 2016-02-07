<?php
/**
 * File: VKAPI.php
 * Created by bafoed.
 * This file is part of VKTM project.
 * Do not modify if you do not know what to do.
 * 2016.
 */

namespace bafoed\VKAPI\Facades;

use Illuminate\Support\Facades\Facade;

class VKAPI extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'VKAPI';
    }
}