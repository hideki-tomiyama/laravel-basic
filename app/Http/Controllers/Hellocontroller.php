<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class Hellocontroller extends Controller
{
    public function index() {
        $name = '侍太郎';
        $languages = ['HTML','CSS','javaScript','php'];

        return view('index',compact('name','languages'));
    }
}
