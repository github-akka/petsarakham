<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;

class OptimizeController extends Controller
{
    public function RouteCache()
    {
        Artisan::call('route:cache');
        echo "route:cache </br>";
        Artisan::call('config:cache');
        echo "config:cache </br>";
        Artisan::call('optimize');
        echo "Optimize </br>";
    }
    public function clearRoute()
    {
        Artisan::call('route:clear');
        echo "route:clear </br>";
        Artisan::call('config:clear');
        echo "config:clear </br>";
        Artisan::call('cache:clear');
        echo "cache:clear </br>";
        Artisan::call('view:clear');
        echo "view:clear </br>";
        Artisan::call('optimize:clear');
        echo "optimize:clear </br>";
    }
}
