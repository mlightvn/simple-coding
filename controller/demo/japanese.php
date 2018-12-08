<?php
include_once("../../Raku/config/bootstrap.php");

$raku = new \Raku\SimpleCoding\SimpleCoding();

$title = "japanese | Demo";

$data = ["title" => $title];

$raku->view('demo/japanese', $data);

