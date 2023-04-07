<?php
namespace App\Http\Controllers\Codezine;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Models\User;

class Demo9Controller extends Controller
{
	public function user()
	{
		$sql = "SELECT * FROM users WHERE id = :id";
		$bindParams = [":id" => 3];
		$userList = DB::select($sql, $bindParams);
		foreach($userList as $user) {
			print($user->id.": ".$user->name."<br>");
		}
		return "<p>処理終了</p>";
	}
	
	public function users()
	{
			$users = DB::table("users")->get();
			foreach($users as $user) {
				print($user->id.": ".$user->name."<br>");
			}
			return "<p>処理終了</p>";
	}

	public function ormUsers()
	{
			$users = User::all();
			foreach($users as $user) {
				print($user->id.": ".$user->name."<br>");
			}
			return "<p>処理終了</p>";
	}

}