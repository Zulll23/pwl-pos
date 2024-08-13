<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

     //   $data=
       // [
         //   'username'=>'dika',
           // 'nama'=>'dika',
            //'password'=>Hash::make('12345'),
            //'user_id'=>4,
            //'level_id'=>1
        //];

        $data=[
            'nama'=>'antok',
        ];
        UserModel::where('username','dika')->delete();

        $user = UserModel::all();
        return view('user',['data' => $user]);
    }
}