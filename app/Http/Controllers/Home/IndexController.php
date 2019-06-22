<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class IndexController extends Controller
{
    //前台
    public function index()
    {
        return View('home/index');
    }
}
