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
		$negative_number = false;
		if(!empty($parameters)) {
			$seperater = ",";
			#allowing support for different delimiters in addition
			if(preg_match('#\\\\\\\(.*?)\\\\\\\#im', $parameters, $match_delimiter)) {
				$seperater = $match_delimiter[1];
				$parameters = preg_replace('#\\\\\\\(.*?)\\\\\\\#', '', $parameters);
			}
			#matching `\n` in inpute array and exploding array on it, then combining all the elements of it to parameter string
			if(preg_match('#\,|\\n#im', $parameters)) {
				$slash_values = explode('\n', $parameters);
				$parameters = implode(',', $slash_values);				
			}
			$values = explode($seperater, $parameters);
		
			foreach($values as $each_value) {			
				#checking for negative_number
				if($each_value < 0) $negative_number = true;
				$addition += $each_value;
			}
			if($negative_number) {
				echo "Negative numbers not allowed."; 
				exit;
			}
		}
		echo "Addition is : ".$addition;
	}
}