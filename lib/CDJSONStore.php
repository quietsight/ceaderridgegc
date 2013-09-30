<?php
class CDJSONStore extends COREData {
	private $TABLE;
	
	public function save_obj_with_name($name){
		$v = get_object_vars($this);
		unset($v['TABLE']);
		$q = "INSERT INTO {$this->TABLE} (name, json) VALUES ('$name', '". json_encode($v) ."')";
		$r = parent::query($q);
		return($r);
	}
	
	public function get_obj_with_name($name){
		$q = parent::query("SELECT * FROM {$this->TABLE} WHERE name = '$name'");
		$js = mysql_fetch_array($q);
		$ar = (array) json_decode($js['json']);
		foreach($ar as $key => $val){
			$this->$key = $val;
		}
	}
	
	public function setJSON($ar){
		foreach($ar as $key => $val){
			$this->$key = $val;
		}
	}

	function __construct(){
		parent::__construct();
		$this->TABLE = "json_store";
		if(!mysql_query("SELECT * FROM {$this->TABLE}")){
			$mk = "CREATE TABLE `json_store` ( `id` int(11) unsigned NOT NULL AUTO_INCREMENT, `json` text NOT NULL, `name` varchar(255) NOT NULL DEFAULT '', PRIMARY KEY (`id`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
			mysql_query($mk);
		}
	}
	function __destruct(){
		parent::__destruct();
	}
}
?>