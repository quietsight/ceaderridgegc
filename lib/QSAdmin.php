<?php
class QSAdmin extends CDObject {
	
	public function content($name){
		$ret = parent::find('name', $name);
		if($ret){
			echo html_entity_decode($ret->content);
		} else {
			echo "No content for $name found.";
		}
	}
	
	function __construct(){
		parent::__construct();
		parent::setTable('content');
	}
	function __destruct(){
		parent::__destruct();
	}
}
?>