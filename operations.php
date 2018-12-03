<?php

class Operations {
		
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
	
	
	
}