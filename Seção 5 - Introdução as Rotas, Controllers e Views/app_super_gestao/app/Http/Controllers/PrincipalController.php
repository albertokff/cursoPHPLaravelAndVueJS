<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        echo 'Chegamos aqui!';

        return view('site.principal');
    }
}
