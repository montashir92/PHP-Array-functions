
<?php
// Multidimentional Array and array clumn


$name = array(
						array(
							"id"          =>"200",
							"first_name"  =>"Abdullah",
							"last_name"   =>"Mamun"
						),
						
						array(
							"id"          =>"201",
							"first_name"  =>"Akber",
							"last_name"   =>"Hossain"
						),
						
						array(
							"id"          =>"202",
							"first_name"  =>"Montashir",
							"last_name"   =>"Billah"
						)
			);
			
			$lastname = array_column($name, "last_name");
			
			echo "<pre>";
			print_r($lastname);
			echo "</pre>";
?>


<?php
$name = array(
						array(
							"id"          =>"200",
							"first_name"  =>"Abdullah",
							"last_name"   =>"Mamun"
						),
						
						array(
							"id"          =>"201",
							"first_name"  =>"Akber",
							"last_name"   =>"Hossain"
						),
						
						array(
							"id"          =>"202",
							"first_name"  =>"Montashir",
							"last_name"   =>"Billah"
						)
			);
			
			$firstname = array_column($name, "first_name");
			
			echo "<pre>";
			print_r($firstname);
			echo "</pre>";


?>

<?php
$name = array(
						array(
							"id"          =>"200",
							"first_name"  =>"Abdullah",
							"last_name"   =>"Mamun"
						),
						
						array(
							"id"          =>"201",
							"first_name"  =>"Akber",
							"last_name"   =>"Hossain"
						),
						
						array(
							"id"          =>"202",
							"first_name"  =>"Montashir",
							"last_name"   =>"Billah"
						)
			);
			
			$firstname = array_column($name, "first_name", "id");
			
			echo "<pre>";
			print_r($firstname);
			echo "</pre>";

?>