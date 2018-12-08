<?php

include_once("../../../Raku/config/bootstrap.php");

include_once("../../../Raku/lib/EraYear.class.php");

use Raku\lib\EraYear;

$era = new EraYear();

$date = $_GET['date'];
$eras = $era->toEraArray($date);
json($eras);
