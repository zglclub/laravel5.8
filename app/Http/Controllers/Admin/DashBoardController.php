<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashBoardController extends Controller
{
    //
    public function dashboard()
    {
        return View('admin/components/index');
    }
}
