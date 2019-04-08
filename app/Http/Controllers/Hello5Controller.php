<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Reponse;

class Hello5Controller extends Controller
{
	public function index(\Illuminate\Http\Request $request, \Illuminate\Http\Response  $response) {
		$html = <<<EOF
		<html>
		<head>
		<title>Hello/Index</title>
		<style>
		body {font-size:16pt; color:#999; }
		h1 { font-size:120pt; text-align:right; color:#fafafa;
		margin:-50px 0px -120px 0px; }
		</style>
		</head>
		<body>
			<h1>Hello</h1>
			<h3>Request</h3>
			<pre>{$request}</h3>
			<h3>Response</h3>
			<pre>{$response}</pre>
		</body>
		</html>
		EOF;
		$response->setContent($html);
		return $response;
	}
}
