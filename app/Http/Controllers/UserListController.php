<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;


class UserListController extends Controller
{
    

    public function displayUsers(){

    	$data=User::all();
    	return view('userDisplay',compact('data'));
    }

    public function displayBooks(){

    	$data=Admin::all();
    	return view('userDisplay',compact('data'));
    }

   
}
