<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    $req->session()->flush();
    return rediect()->route('login.index');
}
