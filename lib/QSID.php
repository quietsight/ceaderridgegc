<?php
class QSID extends QSObject {
	/**
	*
	*
	*
	*
	*
	* @author Skylar Schipper
	* @copyright 2011 Quietsight Inc
	*/
	static public $OFFSET;
	
	public function new_id($str=false){
		$time_id = time();
		$meta = 110000;
		$rand1 = rand(100000, 999999);
		$rand2 = rand(1000, 9999);
		$date = date('ymd');
		$ret = array(
			'id' => $date . $time_id . $meta . $rand1 . $rand2,
			'r1' => $rand1,
			'r2' => $rand2,
			'date' => $date,
			'time' => $time_id,
			'meta' => $meta
		);
		if($str){
			return($ret['id']);
		}
		return($ret);
	}
	public function split_id($id){
		$time_id = substr($id, 6, 10);
		$meta = substr($id, 16, 6);
			$gen_by = substr($meta, 1, 1);
			$v_num = substr($meta, 0, 1);
			if($v_num==0){
				$isValid = "NO";
			} else {
				$isValid = "YES";
			}
		
		$rand1 = substr($id, 22, 6);
		$rand2 = substr($id, 28, 4);
		$date = substr($id, 0, 6);
			$date_year = substr($date, 0, 2);
			$date_month = substr($date, 2, 2);
			$date_day = substr($date, 4, 2);
		$ret = array(
			'r1' => $rand1,
			'r2' => $rand2,
			'date' => array(
				'date_string'=>$date,
				'year' => $date_year,
				'month' => $date_month,
				'day' => $date_day,
			),
			'time' => $time_id,
			'meta' => array(
				'meta_string' => $meta,
				"generated_by" => $gen_by,
        		'valid' => $isValid,
			),
		);
		return($ret);
	}
	
	function __construct(){
		parent::__construct();
	}
	function __destruct(){
		parent::__destruct();
	}
}
?>