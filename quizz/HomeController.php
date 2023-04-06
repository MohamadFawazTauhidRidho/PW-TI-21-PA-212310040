<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data['title'] ="Blade Directive";
        $data['npm'] = "212310040";
        $students[] = array("npm"=>212310004, "name"=>"Muhamad Agus", "gender"=> "M", "alamat"=> "Ciawi");
        $students[] = array("npm"=>212310040, "name"=>"Muhamad Fawaz", "gender"=> "M", "alamat"=> "Kemang");
        $students[] = array("npm"=>212310021, "name"=>"Cindy Kevina", "gender"=> "F", "alamat"=> "Dramaga");
        $students[] = array("npm"=>212310027, "name"=>"Fathur Alfaridzi", "gender"=> "M", "alamat"=> "Tajur");
        $students[] = array("npm"=>212310048, "name"=>"Nagasa Anandes", "gender"=> "M", "alamat"=> "Parung");
        $data['students'] = $students;
        return view('home')->with("data",$data);
    }
}
