
<?php
//Array keyrsort keysort function.

		$cooder = array("Montashir", "Akber","Mamun", "Kader");
			
			echo "The Current position key is :" .key($cooder);
/*Result:
The Current position key is :0
*/
?>
<?php
//array krsort ksort function next.
		$cooder = array("Montashir", "Akber","Mamun", "Kader");
			next($cooder);
			echo "The Current position key is :" .key($cooder);
/*Result:
The Current position key is :1
*/
?>
<?php
//dessornding
		$cooder = array(
			"Montashir"=>"30",
			"Akbor"=>"35",
			"Mamun"=>"32"
			);			
			krsort($cooder);
			foreach($cooder as $key=>$value){
				echo "Name :".$key.", Age: ".$value."<br/>";
			}
/*Result:
Name :Montashir, Age: 30
Name :Mamun, Age: 32
Name :Akbor, Age: 35
*/
?>
<?php
//assornding.

		$cooder = array(
				"Montashir"=>"30",
				"Akbor"=>"35",
				"Mamun"=>"32"
				);
			ksort($cooder);
			foreach($cooder as $key=>$value){
				echo "Name :".$key.", Age: ".$value."<br/>";
			}
/*Result:
Name :Akbor, Age: 35
Name :Mamun, Age: 32
Name :Montashir, Age: 30
*/
?>