<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    /**
     * Show a list of all users of the application.
     *
     * @return Response
     */
    public function index()
    {
        Cache::add('key', 'value');

        var_dump(Cache::get('key'));

        echo '<br>';
        Cache::forget('key');

        var_dump(Cache::get('key'));
    }
}
