
<?php
//Array Values function.

$color = array(
					"0"=>"red",
					"1"=>"green",
					"2"=>"yellow",
					
					);
			$result = array_values($color);
		
		echo "<pre>";
			print_r($result);
		echo "</pre>";
/*Result:
Array
(
    [0] => red
    [1] => green
    [2] => yellow
)
*/
?>
<?php
$color = array(
					"a"=>"red",
					"b"=>"green",
					"c"=>"yellow",
					"d"=>"blue",
					"e"=>"purple",
					"f"=>"Olive"
					);
			$result = array_values($color);
		
		echo "<pre>";
			print_r($result);
		echo "</pre>";
/*Result:

Array
(
    [0] => red
    [1] => green
    [2] => yellow
    [3] => blue
    [4] => purple
    [5] => Olive
)
*/
?>