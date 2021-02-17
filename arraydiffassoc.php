
<?php
//differ assoc

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
			
			
			$differ = array_diff_assoc($array_one, $array_two);
			echo "<pre>";
			print_r($differ);
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
				"a"=>"red",
				"f"=>"black",
				"g"=>"purple"
			
			);
			
			
			$differ = array_diff_assoc($array_one, $array_two);
			echo "<pre>";
			print_r($differ);
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
				"g"=>"blue"
			
			);
			
			$array_three = array(
				"h"=>"red",
				"b"=>"green",
				"g"=>"blue"
			
			);
			
			$differ = array_diff_assoc($array_one, $array_two, $array_three);
			echo "<pre>";
			print_r($differ);
			echo "</pre>";

?>