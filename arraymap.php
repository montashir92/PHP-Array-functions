
<?php
//Array Map function will be addition,

function myFunction($value){
				return ($value+$value);
			}
			
			$arr = array(1,2,3,4,5);
			$result = array_map("myFunction", $arr);
		
		echo "<pre>";
			print_r($result);
		echo "</pre>";
		
/*Result:
Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 8
    [4] => 10
)
*/


?>
<?php
//php map function will be upper case your word.


function myFunction($value){
				$v = strtoupper($value);
				return $v;
			}
			
			$arr = array(
				"Animal" =>"Cow",
				"Type" =>"Mammal"
			);
			$result = array_map("myFunction", $arr);
		
		echo "<pre>";
			print_r($result);
		echo "</pre>";	
/*Result:
Array
(
    [Animal] => COW
    [Type] => MAMMAL
)
*/
?>
<?php?>