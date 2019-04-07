<?php

/*
   |--------------------------------------------------------------------------
   | Web Routes
   |--------------------------------------------------------------------------
   |
   | Here is where you can register web routes for your application. These
   | routes are loaded by the RouteServiceProvider within a group which
   | contains the "web" middleware group. Now create something great!
   |
 */

Route::get('/', function () {
		return view('index');
		});

Route::resource('book', 'BookController');

/* 青本の内容をまとめる BlueBook */

// デフォルトのルーティング
Route::get('/BlueBook', function(){
		return view('welcome');
		}
	  );

Route::get('BlueBook/hello', function(){
		return '
		<html>
		<body>
		<h1>Hello!</h1>
		<p>This is Smaple page</p>
		</body>
		</html>';
		}
	  );

// ヒアドキュメントを使用した文字列の出力(P34 2-4)
// Route情報は後勝ち。

$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px;}
</style>
</head>
<body>
<h1> Hello </h1>
<p> This is sample page</p>
<p> これはサンプルで作ったページです。 </p>
</body>
</html>
EOF;

Route::get('BlueBook/hello2_4',function()
		use($html){
		return $html;
		}
	  );

// パラメータを利用した表示(P36 2-5)
// 第一引数に、パラメータを組み込んだURLを用意してあげる。

Route::get('BlueBook/hello2_5/{msg}',function($msg){
		$html = <<<EOF
		<html>
		<head>
		<title>Hello</title>
		<style>
		body {font-size:16pt; color:#999;}
		h1 {font-size:100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px;}
		</style>
		</head>
		<body>
		<h1> Hello </h1>
		<p>{$msg}</p>
		<p> これはサンプルで作ったページです。 </p>
		</body>
		</html>
		EOF;

		return $html;
		}
	  );

// 任意パラメータを利用したサンプル

Route::get('BlueBook/hello2_5_2/{msg?}',function($msg = 'no message.'){
		$html = <<<EOF
		<html>
		<head>
		<title>Hello</title>
		<style>
		body {font-size:16pt; color:#999;}
		h1 {font-size:100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px;}
		</style>
		</head>
		<body>
		<h1> Hello </h1>
		<p>{$msg}</p>
		<p> これはサンプルで作ったページです。 </p>
		</body>
		</html>
		EOF;
		return $html;
		}
	  );

// コントローラを利用したサンプル
Route::get('BlueBook/hello2_7','HelloController@index');
Route::get('BlueBook/hello2_8/{id?}/{pass?}','HelloController2@index');

// ルートパラメータの利用
Route::get('BlueBook/hello2_10/{id?}/{pass?}', 'Hello3Controller@index');

// 複数アクションの利用
Route::get('BlueBook/hello2_11', 'Hello4Controller@index');
Route::get('BlueBook/hello2_11/other', 'Hello4Controller@other');

// シングルアクションコントローラの利用(__invoke関数)
Route::get('BlueBook/hello2_13', 'SingleActionController');
