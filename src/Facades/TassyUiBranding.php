<?php

namespace TallAndSassy\TassyUiBranding\Facades;

use Illuminate\Support\Facades\Facade;

class TassyUiBranding extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tassyuibranding';
    }
}
