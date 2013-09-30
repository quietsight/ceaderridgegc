<?php
class CDObject extends COREData {
	private $TABLE;
	private $IS_UPDATING;
	
	/*
	*
	*	Find an item in the MySQL Database
	*
	*/
	public function find($where=false, $val=false, $num='*'){
		$query = "SELECT $num FROM {$this->TABLE}";
		if($where && $val){
			$query .= " WHERE $where = '$val'";
		}
		$q = parent::query($query);
		if($q){
			$count = mysql_num_rows($q);
			if($count==1){
				return (object) mysql_fetch_array($q);
			} else if($count==0){
				return false;
			}
			$vals = array();
			while($r = mysql_fetch_array($q)){
				$vals[] = (object) $r;
			}
			return (object) $vals;
		}
		return false;
	}
	/*
	*
	*	Find a single item and set it's values as the object variables
	*
	*/
	public function find_store($where, $val){
		$val = self::find($where, $val);
		if($val){
			$this->IS_UPDATING = true;
			$ar = get_object_vars($val);
			$ret = array();
			foreach($ar as $key => $val){
				$this->$key = $val;
			}
		}
	}
	/*
	*
	*	Save the object to the database
	*
	*/
	public function save(){
		$v = get_object_vars($this);
		unset($v['TABLE']);
		unset($v['IS_UPDATING']);
		$key_s = "";
		$key_v = "";
		foreach($v as $key => $val){
			$key_s .= "$key, ";
			$key_v .= "'$val', ";
		}
		$key_s = substr_replace($key_s, '', strlen($key_s)-2);
		$key_v = substr_replace($key_v, '', strlen($key_v)-2);
		if($this->IS_UPDATING){
			$str = "";
			unset($v['id']);
			foreach($v as $key => $val){
				$str .= $key . "='$val', ";
			}
			$str = substr_replace($str, '', strlen($str)-2);
			$query = "UPDATE {$this->TABLE} SET $str WHERE id = {$this->id}";
		} else {
			$query = "INSERT INTO {$this->TABLE} ($key_s) VALUES ($key_v)";
		}
		$q = parent::query($query);
		return $q;
	}
	public function delete($where, $val){
		$query = "DELETE FROM {$this->TABLE} WHERE $where = '$val'";
		$r = parent::query($query);
		return($r);
	}
	// Set MySQL table
	public function setTable($t){
		$this->TABLE = $t;
	}
	public function list_vars(){
		$v = get_object_vars($this);
		unset($v['TABLE']);
		unset($v['IS_UPDATING']);
		qs_var_dump($v);
	}
	function __construct(){
		parent::__construct();
		$this->TABLE = "table";
		$this->IS_UPDATING = false;
	}
	function __destruct(){
		parent::__destruct();
	}
}
?>