<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Users_acess;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    public function index()
    {
        $limit = -1;
        $users = Users::select('id', 'name', 'email', 'active')
            ->limit($limit)
            ->get();
        $users_acess = DB::table('users_acess')
            ->select(DB::raw('count(*) as logins, users_id'))
            ->groupBy('users_id')
            ->get();


        $users_acess_counted = DB::table('users')
            ->limit($limit)
            ->join('users_acess', 'users.id', '=', 'users_acess.users_id')
            ->select(
                'name',
                'email',
                DB::raw('count(*) as logins'),
                'active'
            )
            ->groupBy('users_acess.users_id')
            ->get();
        return json_encode(['data'=>$users_acess_counted]);
    }
}
