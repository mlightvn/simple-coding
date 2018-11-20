<?php
namespace Raku;

include_once("../../Raku/config/bootstrap.php");

$raku = new \Raku\SimpleCoding\SimpleCoding();

$title = "Documents";
$json_string = '{"user_id":1516,"organization_id":550,"user_id":"1","user_name":"\u30ca\u30e0\u30c6\u30b9\u30c8","user_kana_name":"\u306a\u3080\u3066\u3059\u3068","last_date":null,"type":"2","size_id":"17","exec_numbers":"3","exec_date":"2018\/12\/06","other_note":"\u30ca\u30e0\u30c6\u30b9\u30c8"}';

$author = new \Raku\Author();

$data = [
	"title" => $title,
	"p1" => "\\'paragraph\"{}{{}}",
	"p2" => "Line 1<br>\n
Line 2
Line 3",
	"link1" => "<a href=\"https://coxanh.net\" target=\"_blank\">https://coxanh.net</a>",
	"arr" 		=> array(
		"id" => "001",
		"name" => "Raku",
		"description" => "Simple coding",
		"version" => "1.0.0",
		"author" 			=> $author,
	),
	"json_string" 		=> $json_string,
];

// dd($data);

// true: debug purpose. In production, should be false
// Default values was set in Class already.
// $raku->isClearCache = AUTO_CLEAR_CACHED;

$raku->view('documents/index', $data);


/**
 *
 */
class Author
{
	private $id;
	public $name;

	function __construct()
	{
		$this->id = 1;
		$this->name = "Nguyen Ngoc Nam";
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($newId)
	{
		$this->id = $newId;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName(string $newName)
	{
		$this->name = $newName;
	}

}