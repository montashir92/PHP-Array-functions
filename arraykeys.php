
<?php
//Array keys function.
$cars = array(
				"Volvo" =>"xc90",
				"BMW" =>"x5",
				"Toyota" =>"Highlander",
			);
			
			$result = array_keys($cars);
			
		echo "<pre>";
			print_r($result);
		echo "</pre>";

/*Result:
Array
(
    [0] => Volvo
    [1] => BMW
    [2] => Toyota
)
*/
?>

<?php
$cars = array(
				"Volvo" =>"xc90",
				"BMW" =>"x5",
				"Toyota" =>"Highlander",
			);
			
			$result = array_keys($cars, "x5");
			
		echo "<pre>";
			print_r($result);
		echo "</pre>";
		
/*Result:
Array
(
    [0] => BMW
)

*/

?>