<?php
namespace App\Http\Controllers\Codezine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Demo8Controller extends Controller
{
	public function showInput()
	{
		return view("codezine.input");
	}
	public function addData(Request $request)
	{
		$request->validate([
			"name" => "required",
			"height" => "required|numeric",
			"weight" => "required|numeric",
		]);
		return "<p>入力完了</p>";
	}
}