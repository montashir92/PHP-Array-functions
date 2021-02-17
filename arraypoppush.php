
<?php
// array pop function remove of last element

		$arr = array("red", "green", "blue", "skyblue");
			array_pop($arr);
		 
		echo "<pre>";
			print_r($arr);
		echo "</pre>";
		
/*Result:

Array
(
    [0] => red
    [1] => green
    [2] => blue
)

*/
?>
<?php
//array push function dynamecally add element.

$arr = array("red", "green", "blue");
			array_push($arr, "yellow", "skyblue");
		 
		echo "<pre>";
			print_r($arr);
		echo "</pre>";
/*Result:
Array
(
    [0] => red
    [1] => green
    [2] => blue
    [3] => yellow
    [4] => skyblue
)

*/
?>
<?php
//associative array push function.

$arr = array("a"=>"red", "b"=>"green");
			array_push($arr, "yellow", "skyblue");
		 
		echo "<pre>";
			print_r($arr);
		echo "</pre>";
/*Result:
Array
(
    [a] => red
    [b] => green
    [0] => yellow
    [1] => skyblue
)

*/
?>