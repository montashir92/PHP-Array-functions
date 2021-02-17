
<?php
//differ key.
$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
			
			);
			
			$array_two = array(
				"a"=>"red",
				"c"=>"blue",
				"d"=>"pink"
			
			);
			
			
			$differ = array_diff_key($array_one, $array_two);
			echo "<pre>";
			print_r($differ);
			echo "</pre>";

?>
<?php
$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue"
			
			);
			
			$array_two = array(
				"c"=>"red",
				"d"=>"black",
				"e"=>"brown"
			
			);
			
			$array_three = array(
				"f"=>"green",
				"c"=>"purple",
				"h"=>"red"
			
			);
			
			
			$differ = array_diff_key($array_one, $array_two, $array_three );
			echo "<pre>";
			print_r($differ);
			echo "</pre>";


?>