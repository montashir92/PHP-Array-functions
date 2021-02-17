
<?php
//array merge will be addition.

$arr_one = array("red", "green");
			$arr_two = array("blue", "yellow");
			
			$result = array_merge($arr_one, $arr_two);
			
		echo "<pre>";
			print_r($result);
		echo "</pre>";
/*Result:
Array
(
    [0] => red
    [1] => green
    [2] => blue
    [3] => yellow
)
*/
?>
<?php
//array merge associative array.

$arr_one = array(
				"a" =>"red",
				"b" =>"green",
			);
			
			$arr_two = array(
				"c" =>"blue",
				"b" =>"yellow",
			);
			
			$result = array_merge($arr_one, $arr_two);
	
		echo "<pre>";
			print_r($result);
			echo "</pre>";
			
/*Result:
Array
(
    [a] => red
    [b] => yellow
    [c] => blue
)
*/
?>
<?php?>