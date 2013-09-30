<?php
class QSURL extends QSObject {

	public $URL  = BASE_URL;
	
	/**
	*
	*	Perform a GET operation
	*
	*/
	public function get($append, $params=array()){
		foreach($params as $k => $v){
			$v = urlencode($v);
			$k = urlencode($k);
			$ps .= $k . "=" . $v . "&";
			$count++;
		}
		$ps = substr($ps, 0, strlen($ps)-1);
		echo self::_curl($this->URL . $append . "?" . $ps);
	}
	/**
	*
	*	Perform a POST operation
	*
	*/
	public function post($append, $params=array()){
		self::appendURL($append);
		$ps = '';
		$count = 0;
		foreach($params as $k => $v){
			$v = urlencode($v);
			$k = urlencode($k);
			$ps .= $k . "=" . $v . "&";
			$count++;
		}
		$ps = substr($ps, 0, strlen($ps)-1);
		return self::_curl($this->URL, $ps, $count);
	}
	/**
	*
	*	Append to the URL Variable
	*
	*/
	public function appendURL($ap){
		$url = $this->URL;
		$this->URL = $url . $ap;
	}
	
	/**
	*
	*	Private Functions
	*
	*/
	// Perform a cURL
	private function _curl($url, $post=false, $count=0){
		$c = curl_init();
        curl_setopt($c, CURLOPT_URL, $url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        if($post){
			curl_setopt($c, CURLOPT_POST, $count);
			curl_setopt($c, CURLOPT_POSTFIELDS, $post);
		}
        $resp = curl_exec($c);
        curl_close($c);
        return $resp;
	}
	
	function __construct(){
		parent::__construct();
	}
	function __destruct(){
		parent::__destruct();
	}
}
?>