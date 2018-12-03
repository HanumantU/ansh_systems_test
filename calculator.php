<?php
#require file because, class in file contents all the nessasory operations
require('operations.php');
$function_name = $function_parameters = "";

#iterating over $argv array to seperate out function and parameter values for respective function
foreach($argv as $key=>$parameter) {
	if(isset($key)) {
		if($key == 1) {
			$function_name = $parameter;
		}
		if($key == 2) {
			$function_parameters = $parameter;
		}
	}else {
		echo "Please provide Operation need to perform.\n";
	}
}
#creating instance of class and calling requested function along with parameters
$op = new Operations();
$op->$function_name($function_parameters);
