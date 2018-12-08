<?php
include_once("../../Raku/config/bootstrap.php");

$raku = new \Raku\SimpleCoding\SimpleCoding();

$title = "Documents / Basic";

$data = [
	"title" 		=> $title,
];

$raku->view('documents/basic', $data);

