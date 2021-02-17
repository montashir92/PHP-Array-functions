
<?php
//Array Compact Function.
$name   = "Montashir";
			$dep    = "Physics";
			$coder  = "JAVA";
			
			$result = compact("name", "dep", "coder");
			
		echo "<pre>";
			print_r($result);
		echo "</pre>";
/*Result:

Array
(
    [name] => Montashir
    [dep] => Physics
    [coder] => JAVA
)

*/

?>
