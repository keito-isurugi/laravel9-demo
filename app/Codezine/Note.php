<?php
namespace App\Codezine;

class Note
{
	public function __construct(string $name)
	{
		print("<p>".$name."のNoteクラスのコンストラクタが実行されました。</p>");
	}
}
