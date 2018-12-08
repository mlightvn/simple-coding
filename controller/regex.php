<?php

include_once("../Raku/config/bootstrap.php");

$raku = new \Raku\SimpleCoding\SimpleCoding();

$title = "RegEx";

$data = [
	'title' 			=> $title,
];

$raku->view('regex', $data);

