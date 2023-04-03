<?php 
namespace App\Http\Middleware\Codezine;  // (1)

use Closure;
use Illuminate\Http\Request;

class RecordIPAddress
{
	public function handle(Request $request, Closure $next)  // (2)
	{
		$ipAddress = $request->ip();  // (3)
		$path = $request->path();  // (4)
		print("<p>IPアドレスは".$ipAddress."でパスは".$path."</p>");  // (5)
		return $next($request);  // (6)
	}
}