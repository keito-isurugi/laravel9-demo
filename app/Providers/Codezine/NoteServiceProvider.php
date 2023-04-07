<?php
namespace App\Providers\Codezine;

use Illuminate\Support\ServiceProvider;
use App\Codezine\Note;

class NoteServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind("App\Codezine\Note", function($app) {
			$name = "しんちゃん";
			$note = new Note($name);
			return $note;
		});
	}
}