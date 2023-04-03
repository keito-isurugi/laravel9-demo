<?php 

namespace App\Http\Controllers\Codezine;

use App\Http\Controllers\Controller;

class HelloController extends Controller
{
	public function __invoke() 
	{
		$data["name"] = "hoge"; 
		return view("hello", $data); 
	}

	public function foo() 
	{
		$data["name"] = "foo"; 
		return view("hello", $data); 
	}
}