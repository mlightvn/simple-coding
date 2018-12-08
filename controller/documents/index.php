<?php
include_once("../../Raku/config/bootstrap.php");

$raku = new \Raku\SimpleCoding\SimpleCoding();

$title = "Documents";
$arr 	= [
		"author" 	=> [
			"name" 				=> "Nguyen Ngoc Nam",
			"year_old" 			=> 1,
		],
	];

$data = [
	"title" 			=> $title,
	"link1" 			=> "https://simple-coding.coxanh.net/",
	"arr" 				=> $arr,
	"json_string" 		=> json_encode($arr),
	"p1" 				=> "Line 1
Line 2
<a href='https://simple-coding.coxanh.net/'>https://simple-coding.coxanh.net/</a>
",
	"p2" 				=> "Paragraph 2:<br>
Line 2<br>
Line 3<br>
<a href='https://simple-coding.coxanh.net/'>https://simple-coding.coxanh.net/</a>
",
];

$raku->view('documents/index', $data);

