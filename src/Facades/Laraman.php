<?php

namespace Phpuzem\Laraman\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Description of LaramanFacade
 *
 * @author phpuzem
 */
class Laraman extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laraman';
    }
}
