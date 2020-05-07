<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        return view('home');
    }

    public function mail()
    {
        $name = 'Vicky';
        Mail::to('vickyvanessa02@gmail.com')->send(new SendMailable($name));

        return 'Email was sent';
    }
}
