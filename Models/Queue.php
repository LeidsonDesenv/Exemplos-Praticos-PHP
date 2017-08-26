<?php

class Queue{

	public $list = array();

	function pushQueue($item){
		if(is_int($item)){
		 	array_push($this->list, $item);
		}
			//throw new Exception("O Valor deve ser um número inteiro.")	;
	}

	function popQueue(){
		if(count($list) > 0)
			array_pop($list);
	}

	function min(){
		$smaller_num = PHP_INT_MAX;
		$listLength = count($list);
		if($listLength > 0){
			for($i = 0; $i < $listLength; $i++){
				if($list[$i] < $smaller_num)
					$smaller_num = $list[$i];
			}

		return $smaller_num;
		}
		return null;
	}

	function minWithSession($session_array){
		$smaller_num = PHP_INT_MAX;
		$listLength = count($session_array);

		if($listLength > 0){
			for($i = 0; $i < $listLength; $i++){
				if($session_array[$i] < $smaller_num)
					$smaller_num = $session_array[$i];
			}
			return $smaller_num;
		}
	}
}

?>
