<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class PageController extends Controller
{
    public function index()
    {
        if (DB::connection()->getPdo()){
            if (isset($_SESSION["username"]) && isset($_SESSION["user_id"])) {
                return view("index");
            } else {
                return view('login');
            }
        }else{
            return  view('failed_page');
        }
    }
    public function register()
    {
        return view('register');
    }

    public function users()
    {
        return view('users');
    }
}
