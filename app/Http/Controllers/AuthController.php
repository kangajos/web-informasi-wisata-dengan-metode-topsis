<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class AuthController extends Controller
{
    public function index()
    {
        if (Session::has("login"))
        {
            return redirect("wisata");
        }
        return view("layouts.mainlogin");
    }

    public function check(Request $request)
    {
        $email = "admin@gmail.com";
        $password = "admin";
        if ($request->email == $email && $request->password == $password)
        {
            Session::put("login", TRUE);
            Session::flash("msg", "Selamat Datang ADMIN");
            return redirect("wisata");
        }
        Session::flash("msg", "Login gagal, harap login dengan benar.");
        return redirect("auth");
    }

    public function out()
    {
        Session::flush();
        return redirect("auth");
    }
}
