<?php
namespace App\Providers\Codezine;

use Illuminate\Support\ServiceProvider;
use App\Codezine\Note;

class NoteServiceProvider extends ServiceProvider  // (1)
{
	public function register()  // (2)
	{
		$this->app->bind("App\Codezine\Note", function($app) {
			$name = "しんちゃん";
			$note = new Note($name);  // (3)
			return $note;  // (4)
		});
	}
}