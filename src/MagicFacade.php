<?php
 namespace Facadez\Magic;

/**
 *
 * @license MIT
 * @package facadez\Magic
 */

use Illuminate\Support\Facades\Facade;

class MagicFacade extends Facade
{
    /**
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Magic';
    }
}
