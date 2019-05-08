<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){

        //echo 'salam';
        //return view("show");

        $users=[
            ['fname'=> 'Ali', 'lname' => 'Alavi', 'age' =>26],
            ['fname'=> 'Taghi', 'lname' => 'Taghavi', 'age' =>27],
            ['fname'=> 'Naghi', 'lname' => 'Naghavi', 'age' =>28],
            ['fname'=> 'Vali', 'lname' => 'Valavi', 'age' =>29]
        ];
        $data = ['x' => $users];
        return view('show', $data);
    }

}
