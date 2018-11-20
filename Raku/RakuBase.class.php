<?php

namespace Raku;

/**
 * @author Nguyen Nam
 * @created date: 2018/10/30
 * 
 */
class RakuBase
{

	function __construct()
	{
		$this->init();
	}

	protected function init()
	{
		# code...
	}

	public function json($data = NULL)
	{
		header('content-type: application/json; charset=utf-8');
		if(is_string($data)){
			$json = $data;
		}elseif(is_array($data) || is_object($data)){
			$json = json_encode($data);
		}

		echo $json;
		exit;
	}

	public function author()
	{
		$author = [
			"name" 				=> "Nguyen Ngoc Nam",
			"furigana" 			=> "グエン　ゴック　ナム",
			"website" 			=> "https://coxanh.net/about",
			"gender" 			=> "Male",
			"nationality" 		=> "Vietnamese",
		];

		foreach ($author as $key => $value) {
			echo $key . "    =>    " . $value . "<br>\n";
		}

		return $author;
	}

}