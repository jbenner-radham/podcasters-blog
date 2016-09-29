<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\RobotsMiddleware\RobotsMiddleware as SpatieRobotsMiddleware;

class RobotsMiddleware extends SpatieRobotsMiddleware
{
    /**
     * @param Request $request
     * @return bool|string
     */
    protected function shouldIndex(Request $request)
    {
        return false;
    }
}
