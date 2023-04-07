<?php
namespace App\Providers\Codezine;

use Illuminate\Support\ServiceProvider;
use App\Codezine\ClassA;

class DemoAppServiceProvider extends ServiceProvider
{
	public function register()
	{
		app()->bind('classA', ClassA::class);
	}
}