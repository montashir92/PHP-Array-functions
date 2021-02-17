
<?php
//array Walk function.
function myFunction($department, $name){
				echo "$name comes from $department department<br/>";
			}
			
		$name = array(
			"Akber"      =>"Biology",
			"Mamun"      =>"Maths",
			"Montashir"  =>"physics",
		
		);
		
		array_walk($name, "myFunction");
/*Result:
Akber comes from Biology department
Mamun comes from Maths department
Montashir comes from physics department


*/
		

?>
