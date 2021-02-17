
<?php
//php array pad function.

		$arr = array("red", "green");
			$result = array_pad($arr,5,"blue");
		 
		echo "<pre>";
			print_r($result);
		echo "</pre>";

/*Result:

Array
(
    [0] => red
    [1] => green
    [2] => blue
    [3] => blue
    [4] => blue
)


*/
?>

<?php
$arr = array("red", "green");
			$result = array_pad($arr,-5,"blue");
		 
		echo "<pre>";
			print_r($result);
		echo "</pre>";
		
/*Result:
Array
(
    [0] => blue
    [1] => blue
    [2] => blue
    [3] => red
    [4] => green
)


*/


?>