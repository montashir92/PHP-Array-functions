
<?php
//Array intersect.
$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
			
			);
			
			$array_two = array(
				"e"=>"red",
				"f"=>"green",
				"g"=>"blue"
			
			);
			
			$result = array_intersect($array_one, $array_two );
			echo "<pre>";
			print_r($result);
			echo "</pre>";
			

?>
<?php
$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
			
			);
			
			$array_two = array(
				"e"=>"red",
				"f"=>"green",
				"g"=>"purple"
			
			);
			
			$array_three = array(
				"a"=>"red",
				"b"=>"green",
				"h"=>"yellow"
			
			);
			$result = array_intersect($array_one, $array_two, $array_three );
			echo "<pre>";
			print_r($result);
			echo "</pre>";
?>