<?php
namespace TariqulGub\Admin\Controllers;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{

    public function home()
    {
        return view('admin::home');
    }
}