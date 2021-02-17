<?php
//array differ.

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
			
			$differ = array_diff($array_one, $array_two);
			echo "<pre>";
			print_r($differ);
			echo "</pre>"
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
				"f"=>"black",
				"g"=>"purple"
			
			);
			
			$array_three = array(
				"a"=>"red",
				"b"=>"black",
				"h"=>"yellow"
			
			);
			
			$differ = array_diff($array_one, $array_two, $array_three);
			echo "<pre>";
			print_r($differ);
			echo "</pre>";

?>
<?php?>