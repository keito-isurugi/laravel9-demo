<?php
namespace App\Codezine;

use Illuminate\Support\Facades\Facade;

class FacadeClassA extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'classA';
	}
}
