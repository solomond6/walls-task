<?php

   $array = ["foo" => 3, "bar" => 1];

   $orig = injectAfter($array, "foo", "baz", 42);
   var_dump($orig);

   function injectAfter($array, $afterKey, $newKey, $newValue){
   		$newArray = [];

   		//check if the afterkey exist and push the newKey and newValue after the key
   		if (array_key_exists($afterKey, $array)){
		    foreach ($array as $k => $value) {
		      $newArray[$k] = $value;
		      if ($k === $afterKey) {
		        $newArray[$newKey] = $newValue;
		      }
		    }
   		}else{

   			//if afterkey does not exist, push newkey and newValue at the end of the new array
   			foreach ($array as $k => $value) {
		      $newArray[$k] = $value;
		    }
		    $newArray[$newKey] = $newValue;
   		}
   		
   		return $newArray;
   }

?>

<script type="text/javascript" src="task1.js"></script>