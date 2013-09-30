<?php
class QSObject {
	private $QUEUE;
	private $HASQUEUE;
	
	public function __queue($fn){
		$this->QUEUE[] = $fn;
		$this->HASQUEUE = true;
	}

	function __construct(){
		$this->HASQUEUE = false;
	}
	function __destruct(){
		if($this->HASQUEUE){
			for($i = 0; $i < count($this->QUEUE); $i++){
				$q = $this->QUEUE[$i];
				if(is_callable($q)){
					$q();
				}
			}
		}
	}
}
?>