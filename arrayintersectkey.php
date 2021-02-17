

<?php
//php array intersect key.

$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue"
			
			);
			
			$array_two = array(
				"a"=>"red",
				"c"=>"blue",
				"d"=>"pink"
			);
			
			
			$result = array_intersect_key($array_one, $array_two);
			echo "<pre>";
			print_r($result);
			echo "</pre>";

/*Result:
Array
(
    [a] => red
    [c] => blue
)

*/
?>

<?php
$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue"
			
			);
			
			$array_two = array(
				"c"=>"yellow",
				"d"=>"black",
				"e"=>"brown"
			);
			$array_three = array(
				"f"=>"green",
				"c"=>"purple",
				"g"=>"red"
			);
			
			$result = array_intersect_key($array_one, $array_two, $array_three);
			echo "<pre>";
			print_r($result);
			echo "</pre>";

/*Result:
Array
(
    [c] => blue
)

*/

?>