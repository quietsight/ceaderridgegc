<?php
class COREData extends QSObject {
	private $SERVER;
	private $USER;
	private $PASSWORD;
	private $DATABASE;
	
	private $CON;
	
	function __construct(){
		parent::__construct();
		if(IS_PRODUCTION){
			$this->SERVER = MY_SQL_SERVER_P;
			$this->USER = MY_SQL_USER_P;
			$this->PASSWORD = MY_SQL_PASS_P;
			$this->DATABASE = MY_SQL_DB_P;

		} else {
			$this->SERVER = MY_SQL_SERVER_D;
			$this->USER = MY_SQL_USER_D;
			$this->PASSWORD = MY_SQL_PASS_D;
			$this->DATABASE = MY_SQL_DB_D;
		}
		$this->CON = mysql_connect($this->SERVER, $this->USER, $this->PASSWORD);
		mysql_select_db($this->DATABASE, $this->CON);
	}
	
	public function query($query){
		$q = @mysql_query($query, $this->CON)or die(mysql_error());
		return $q;
	}
	
	function __destruct(){
		if($this->CON){
			mysql_close($this->CON);
		}
		parent::__destruct();
	}
}
?>