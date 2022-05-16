<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index(){

        $data1 = get_browser();

        $data2 = $_SERVER['HTTP_USER_AGENT'];

        $ip = $_SERVER['REMOTE_ADDR'];

        return view('welcome', compact('data1', 'data2', 'ip'));
    }
}
