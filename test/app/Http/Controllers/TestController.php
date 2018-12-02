<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function index(){
    	return view('welcome');
    }
    public function getData(){

    	// dd('fdkvhdifud');
    	$result=DB::table('tests')->get();
    	return $result;
    }
    public function setData(Request $request){

      $data=array();
      $data['name']=$request->name;
       $store=DB::table('tests')->insert($data);
         if($store){
         	$result=DB::table('tests')->get();
         }
      // return $result;
    }
}
