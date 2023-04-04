<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>バリデーションテスト</title>
</head>
<body>
	@if($errors->any())
	<section style="border: 1px red solid">
		<ul style="color: red">
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
		</ul>
	</section>
	@endif
	<p>入力画面</p>
		<form action="/demo8/addData" method="post">
			@csrf
			<label for="name">
				名前: 
				<input type="text" name="name" id="name">
			</label><br>
			<label for="height">
				身長: 
				<input type="text" name="height" id="height">
			</label><br>
			<label for="weight">
				体重: 
				<input type="text" name="weight" id="weight">
			</label><br>
			<label for="note">
				コメント: 
				<textarea name="note" id="note"></textarea>
			</label><br>
			<button type="submit">送信</button>
		</form>
</body>
</html>