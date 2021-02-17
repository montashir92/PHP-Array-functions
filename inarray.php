
<?php
//Array in_array function check Exist or Not exist.


$cooder = array("Montashir", "Akber","Mamun", "Kader");
			if(isset($_POST['username'])){
				$text = $_POST['username'];
				
				if(in_array($text, $cooder)){
					echo "$text Exist.";
					
				}
				else
				{
					echo "$text Not Exist!!";
				}
			}
			
			
?>