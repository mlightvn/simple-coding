<?php
include_once("../Raku/config/bootstrap.php");

$raku = new \Raku\SimpleCoding\SimpleCoding();

$title = null;

$data = ["title" => $title];

$raku->view('landing_page', $data);

