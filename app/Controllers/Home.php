<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Admin_Template/index.php');
    }
    public function login()
    {
        return view('Admin_Template/auth-login.php');
    }

    public function register()
    {
        return view('Admin_Template/auth-register.php');
    }

    public function forgot()
    {
        return view('Admin_Template/auth-forgot.php');
    }

    public function table()
    {
        return view('Admin_Template/table-basic.php');
    }
}
