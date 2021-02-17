
<?php
//Array unshift function add first line.
$color = array(
					"a"=>"red",
					"b"=>"green",
					"c"=>"yellow"
					);
			echo "<pre>";
			print_r($color);
			echo "</pre>";
			
			array_unshift($color, "blue");
		
		echo "<pre>";
			print_r($color);
		echo "</pre>";
/*Result:
Array
(
    [a] => red
    [b] => green
    [c] => yellow
)
Array
(
    [0] => blue
    [a] => red
    [b] => green
    [c] => yellow
)
*/
?>
<?php
$color = array(
					"0"=>"red",
					"1"=>"green",
					"2"=>"yellow"
					);
			echo "<pre>";
			print_r($color);
			echo "</pre>";
			
			array_unshift($color, "blue");
		
		echo "<pre>";
			print_r($color);
		echo "</pre>";
/*Result:
Array
(
    [0] => red
    [1] => green
    [2] => yellow
)
Array
(
    [0] => blue
    [1] => red
    [2] => green
    [3] => yellow
)
*/
?>