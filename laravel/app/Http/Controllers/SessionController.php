<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{
    /**
     * Show a list of all users of the application.
     *
     * @return Response
     */
    public function index()
    {

        $value = session('someKey');

        var_dump($value);
        echo '<br>';

        $value1 = session('anotherKey', 'defaultValue');
        var_dump($value1);
        echo '<br>';

        session(['hasValue' => 'hello']);
        die(session('hasValue'));
    }
}
