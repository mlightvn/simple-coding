<?php
include_once("../../Raku/config/bootstrap.php");

$raku = new \Raku\SimpleCoding\SimpleCoding();

$title = "Demo";

$data = ["title" => $title];

$raku->view('demo/index', $data);

