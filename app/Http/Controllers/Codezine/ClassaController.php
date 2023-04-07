<?php 

namespace App\Http\Controllers\Codezine;

use App\Http\Controllers\Controller;
use App\Codezine\ClassA;
use App\Codezine\FacadeClassA;

class ClassaController extends Controller
{
	public function __invoke() 
	{
		$data["name"] = "hoge"; 
		return view("hello", $data); 
	}

	public function foo() 
	{
		$data["name"] = "foo"; 
		return view("codezine.hello", $data); 
	}

	public function classA()
	{
		$classA = new ClassA();
		$data["name"] = $classA->methodA();
		return view("codezine.hello", $data); 
	}

	public function staticClassA()
	{
		$data["name"] = ClassA::staticMethodA();
		return view("codezine.hello", $data); 
	}

	public function facadeClassA()
	{
		$data["name"] = FacadeClassA::methodA();
		return view("codezine.hello", $data); 
	}
}