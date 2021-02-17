
<?php
//array arsort & asort function desinding.

	$num = array(
			"Akber"      =>"35",
			"Mamun"      =>"40",
			"Montashir"  =>"30",
			"Billah"     =>"28"
		
		);
		arsort($num);	
		foreach($num as $name=>$age){
			echo "Name: ".$name.", Age:".$age."<br/>";
		}
/*Result:
Name: Mamun, Age:40
Name: Akber, Age:35
Name: Montashir, Age:30
Name: Billah, Age:28
*/

?>
<?php
//array arsort & asort function assinding.
$num = array(
			"Akber"      =>"35",
			"Mamun"      =>"40",
			"Montashir"  =>"30",
			"Billah"     =>"28"
		
		);
		asort($num);	
		foreach($num as $name=>$age){
			echo "Name: ".$name.", Age:".$age."<br/>";
		}
/*Result:
Name: Billah, Age:28
Name: Montashir, Age:30
Name: Akber, Age:35
Name: Mamun, Age:40

*/
?>