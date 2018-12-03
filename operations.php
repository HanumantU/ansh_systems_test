<?php

class Operations {
		
	/* Function used to do summation of all the numbers passed to it in arguments.
	* @param $parameters String
	*/
	public function sum($parameters) {
		$sum = 0;
		if(!empty($parameters)) {
			$values = explode(',', $parameters);
			foreach($values as $each_value) {
				$sum += $each_value;
			}
		}		
		echo "Sum is : ".$sum;
	}
	
	/* Function used to do Addition of all the numbers passed to it in arguments.
	* @param $parameters String
	*/
	public function add($parameters) {
		$addition = 0;
		if(!empty($parameters)) {
			$values = explode(',', $parameters);
			foreach($values as $each_value) {
				$addition += $each_value;
			}
		}
		echo "Addition is : ".$addition;
	}
}