<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index(){
        // $users = DB::table('users')->get();
        // $users = DB::table('users')->limit(1)->get();
//        $users = DB::table('users')->where('name', 'Flux Wave')->get();
//        $users = DB::table('users')->where('name', 'like', '%@gmail.com')->get();
        $users = DB::table('users')->where('id', 3)->first();
        return view('user', ['data' => $users]);



    }
}
