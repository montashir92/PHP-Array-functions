
<?php
//array multisort function.

$arr_one = array("Dog", "Cat", "Horse", "Bear");
			//$arr_two = array("Lion", "Tiger");
			
			
			
			
			
		 array_multisort($arr_one);
		echo "<pre>";
			print_r($arr_one);
		echo "</pre>";
/*Result:

Array
(
    [0] => Bear
    [1] => Cat
    [2] => Dog
    [3] => Horse
)

*/

?>

<?php
$arr_one = array("Dog", "Cat");
			$arr_two = array("Lion", "Tiger");
			
			
		 array_multisort($arr_one, $arr_two);
		 
		echo "<pre>";
			print_r($arr_one);
		echo "</pre>";
		
		echo "<pre>";
			print_r($arr_two);
		echo "</pre>";
		
/*Result:
Array
(
    [0] => Cat
    [1] => Dog
)
Array
(
    [0] => Tiger
    [1] => Lion
)


*/

?>


<?php
$arr_one = array("Dog", "Cat");
			$arr_two = array("Lion", "Tiger");
			
			
		 array_multisort($arr_one,SORT_ASC, $arr_two,SORT_DESC);
		 
		echo "<pre>";
			print_r($arr_one);
		echo "</pre>";
		
		echo "<pre>";
			print_r($arr_two);
		echo "</pre>";
/*Result:

Array
(
    [0] => Cat
    [1] => Dog
)
Array
(
    [0] => Tiger
    [1] => Lion
)



*/

?>