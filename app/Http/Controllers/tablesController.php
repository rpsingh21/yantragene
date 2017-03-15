<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class tablesController extends Controller
{
    public function user(){
        $arr=DB::table('users')->where('status','=','1')->get();
        return view('tab')->with(['tr'=>$arr,]);
    }
    public function teams(){
        $arr=DB::table('participate')->get();
        return view('table')->with(['tr'=>$arr]);;
    }
    public function pendding(){

    }
    public function useName($id){
        $arr=DB::table('users')->where('status','=','1')->where('id','=',$id)->get();
        return $arr;
    }
}
