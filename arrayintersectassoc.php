
<?php
//array intersect assoc.
$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
			
			);
			
			$array_two = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue"
			
			);
			
			
			
			$result = array_intersect_assoc($array_one, $array_two);
			echo "<pre>";
			print_r($result);
			echo "</pre>";

/*Result:
	Array
(
    [a] => red
    [b] => green
    [c] => blue
)

*/
?>


<?php
$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
			
			);
			
			$array_two = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue"
			
			);
			
			$array_three = array(
				"a"=>"red",
				"b"=>"green",
				"g"=>"blue"
			
			);
			
			$result = array_intersect_assoc($array_one, $array_two, $array_three);
			echo "<pre>";
			print_r($result);
			echo "</pre>";


/*Result:
Array
(
    [a] => red
    [b] => green
)

*/
?>
<?php
$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
			
			);
			
			$array_two = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
			
			);
			
			$array_three = array(
				"a"=>"red",
				"b"=>"green",
				"g"=>"blue",
				"d"=>"yellow"
			
			);
			
			$result = array_intersect_assoc($array_one, $array_two, $array_three);
			echo "<pre>";
			print_r($result);
			echo "</pre>";
/*Result:
Array
(
    [a] => red
    [b] => green
    [d] => yellow
)


*/			


?>