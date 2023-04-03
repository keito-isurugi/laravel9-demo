<?php
namespace App\Http\Controllers\Codezine;

use App\Http\Controllers\Controller;
use App\Codezine\Book;
use App\Codezine\Magazine;
use App\Codezine\Note;

class Demo6Controller extends Controller
{

	private $magazine;
	public function __construct(Magazine $magazine)
	{
		$this->magazine = $magazine;
	}

	public function newBook()
	{
		$book = new Book();  // (1)
		return "<p>newBook()メソッドが実行されました。</p>";
	}

	public function newBook2()
	{
		$book = resolve("App\Codezine\Book");  // (1)
		return "<p>newBook2()メソッドが実行されました。</p>";
	}

	public function newBook3(Book $book)
	{
		return "<p>newBook3()メソッドが実行されました。</p>";
	}

	public function newNote(Note $note)
	{
		return "<p>newNote()メソッドが実行されました。</p>";
	}
}