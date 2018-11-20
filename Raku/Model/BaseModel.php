<?php

namespace Raku\Model;

class BaseModel extends Database {

	private $tableName = NULL;

	public function __construct(){
		parent::__construct();

		$this->init();
	}

	protected function init(){}

	public function getTableName(){
		return $this->tableName;
	}

	public function setTableName($tableName){
		$this->tableName = $tableName;
	}

}
