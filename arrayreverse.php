

<?php
//array reverse function.
$color_one = array("red", "green", "blue", "yellow");
	
			$result = array_reverse($color_one);
			
		 
		echo "<pre>";
			print_r($result);
		echo "</pre>";
/*Result:
Array
(
    [0] => yellow
    [1] => blue
    [2] => green
    [3] => red
)


*/

?>

<?php
$color_one = array("red", "green", "blue", "yellow");
	
			$result = array_reverse($color_one);
			
		 
		echo "<pre>";
			print_r($color_one);
		echo "</pre>";
		
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
Array
(
    [0] => yellow
    [1] => blue
    [2] => green
    [3] => red
)

*/


?>

<?php
$color_one = array("a"=>"red", "b"=>"green", "c"=>"blue", "d"=>"yellow");
	
			$result = array_reverse($color_one);
			
		 
		echo "<pre>";
			print_r($color_one);
		echo "</pre>";
		
		echo "<pre>";
			print_r($result);
		echo "</pre>";
/*Result:

Array
(
    [a] => red
    [b] => green
    [c] => blue
    [d] => yellow
)
Array
(
    [d] => yellow
    [c] => blue
    [b] => green
    [a] => red
)

*/

?>