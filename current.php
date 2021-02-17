
<?php
//Array Current function.
		$name = array("Montashir", "Akber", "Mamun", "Jamal");
			echo current($name);
/*Result:
Montashir


*/
?>

<?php
//You want to catch last value.

		$name = array("Montashir", "Akber", "Mamun", "Jamal");
			echo current($name). "<br/>";
			echo end($name)."<br/>";
/*Result:
Montashir
Jamal

*/			
?>

<?php
	$name = array("Montashir", "Akber", "Mamun", "Jamal");
			
		echo "<pre>";
			print_r($name);
		echo "</pre>";
		
		echo current($name). "<br/>";
		echo end($name)."<br/>";
/*Result:
Array
(
    [0] => Montashir
    [1] => Akber
    [2] => Mamun
    [3] => Jamal
)
Montashir
Jamal

*/

?>

<?php
		$name = array("Montashir", "Akber", "Mamun", "Jamal");
			
		echo "<pre>";
			print_r($name);
		echo "</pre>";
		
		echo "Current Value: ".current($name). "<br/>";
		echo "Next Value: ".next($name). "<br/>";
		echo "Last Value: ".end($name)."<br/>";
		
		
/*Result:
Array
(
    [0] => Montashir
    [1] => Akber
    [2] => Mamun
    [3] => Jamal
)
Current Value: Montashir
Next Value: Akber
Last Value: Jamal


*/

?>

<?php
	$name = array("Montashir", "Akber", "Mamun", "Jamal");
			
		echo "<pre>";
			print_r($name);
		echo "</pre>";
		
		echo "Current Value: ".current($name). "<br/>";
		echo "Next Value: ".next($name). "<br/>";
		echo "Current Value: ".current($name). "<br/>";
		echo "Last Value: ".end($name)."<br/>";
/*Result:

Array
(
    [0] => Montashir
    [1] => Akber
    [2] => Mamun
    [3] => Jamal
)
Current Value: Montashir
Next Value: Akber
Current Value: Akber
Last Value: Jamal


*/

?>

<?php
$name = array("Montashir", "Akber", "Mamun", "Jamal");
			
		echo "<pre>";
			print_r($name);
		echo "</pre>";
		
		echo "Current Value: ".current($name). "<br/>";
		echo "Next Value: ".next($name). "<br/>";
		echo "Current Value: ".current($name). "<br/>";
		echo "Previous Value: ".prev($name). "<br/>";
		echo "Last Value: ".end($name)."<br/>";
/*Result:
Array
(
    [0] => Montashir
    [1] => Akber
    [2] => Mamun
    [3] => Jamal
)
Current Value: Montashir
Next Value: Akber
Current Value: Akber
Previous Value: Montashir
Last Value: Jamal

*/

?>