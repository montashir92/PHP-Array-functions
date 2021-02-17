
<?php
//Array Replace function.
			$color_one = array("red", "green");
			$color_two = array("blue", "yellow");
			$result = array_replace($color_one, $color_two);
			
		 
		echo "<pre>";
			print_r($result);
		echo "</pre>";
		
		
/*Result;
Array
(
    [0] => blue
    [1] => yellow
)


*/

?>

<?php
//associative replace array.

			$color_one = array("a"=>"red", "b"=>"green");
			$color_two = array("a"=>"blue", "yellow");
			$result = array_replace($color_one, $color_two);
			
		 
		echo "<pre>";
			print_r($result);
		echo "</pre>";
		
/*Result:
Array
(
    [a] => blue
    [b] => green
    [0] => yellow
)


*/
?>

<?php
			$color_one = array("a"=>"red", "green");
			$color_two = array("a"=>"blue", "b"=>"yellow");
			$result = array_replace($color_one, $color_two);
			
		 
		echo "<pre>";
			print_r($result);
		echo "</pre>";
		
/*Result:
Array
(
    [a] => blue
    [0] => green
    [b] => yellow
)



*/

?>

<?php
			$color_one = array("red", "green");
			$color_two = array("blue", "yellow");
			$color_three = array("orange", "skyblue");
			
			$result = array_replace($color_one, $color_two, $color_three);
			
		 
		echo "<pre>";
			print_r($result);
		echo "</pre>";
/*Result:
Array
(
    [0] => orange
    [1] => skyblue
)

*/


?>