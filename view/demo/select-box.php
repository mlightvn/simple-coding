<?php
include_once("../../Raku/config/bootstrap.php");

$raku = new \Raku\SimpleCoding\SimpleCoding();

$title = "Select Box | Demo";

$data = ["title" => $title];

$raku->view('demo/select-box', $data);

