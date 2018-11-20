<?php

namespace Raku\Model;

class Database {
	private $dbSetting = NULL;
	private $connection = NULL;

	public function __construct(){
		$this->readConfig();
	}

	function __destruct() {
		$this->close();
	}

	private function readConfig(){
		$this->setDbSetting(require_once(CONFIG_DIR . "database" . PHP_EXT));
		$connection_name = $this->dbSetting["connection_name"];
		$setting = $this->dbSetting[$connection_name];

		$connectionString = $setting["driver"] . ":"
							. "port=" . $setting["port"]
							. "host=" . $setting["host"]
							. "dbname=" . $setting["database"];

		try {
			$this->connection = new PDO($connectionString, $setting["username"], $setting["password"]);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $exception){
			echo "[Database]Connection failed: " . $exception->getMessage();
			exit;
		}
	}

	public function getDbSetting(){
		return $this->dbSetting;
	}

	public function setDbSetting($dbSetting){
		$this->dbSetting = $dbSetting;
	}

	public function getConnection(){
		return $this->connection;
	}

	public function close(){
		unset($this->connection);
	}

}
