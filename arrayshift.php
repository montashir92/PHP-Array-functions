

<?php
//array shift function first key remove.
$color_one = array(
						"a" =>"red",
						"b" =>"green",
						"c" =>"blue",
						"d" =>"yellow"
						);
			
				array_shift($color_one);
		
		echo "<pre>";
			print_r($color_one);
		echo "</pre>";
		
/*Result:
Array
(
    [b] => green
    [c] => blue
    [d] => yellow
)

*/


?>

<?php
$color_one = array(
						"0" =>"red",
						"1" =>"green",
						"2" =>"blue",
						"3" =>"yellow"
						);
			
				array_shift($color_one);
		
		echo "<pre>";
			print_r($color_one);
		echo "</pre>";
/*Result:
Array
(
    [0] => green
    [1] => blue
    [2] => yellow
)


*/
?>
<?php?>