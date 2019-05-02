<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class User extends Controller
{
    /**
     * 展示应用的用户列表.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::select('select * from lara_users;');
      
      
        return view('user.index', ['users' => $users[0]]);
    }
}