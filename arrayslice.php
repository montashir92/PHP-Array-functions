

<?php
//array Slice function some value remove.

$color_one = array("red", "green", "blue", "yellow", "skyblue");
			$result = array_slice($color_one, 2);			
						
			
		
		echo "<pre>";
			print_r($result);
		echo "</pre>";
/*Result:

Array
(
    [0] => blue
    [1] => yellow
    [2] => skyblue
)

*/

?>

<?php
//array slice function you want Certainly show value.

$color_one = array("red", "green", "blue", "yellow", "skyblue");
			$result = array_slice($color_one,1,3);			
						
			
		
		echo "<pre>";
			print_r($result);
		echo "</pre>";
/*Result:
Array
(
    [0] => green
    [1] => blue
    [2] => yellow
)

*/
?>

<?php
$color_one = array("red", "green", "blue", "yellow", "skyblue");
			$result = array_slice($color_one,-2,1);			
						
			
		
		echo "<pre>";
			print_r($result);
		echo "</pre>";
/*Result:
Array
(
    [0] => yellow
)
)

*/

?>