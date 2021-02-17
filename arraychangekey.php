<?php
//Associative array.Upper case
			$name = array(
				"Jamal" =>35,
				"Kader" =>35,
				"Mamun" =>35,
				"Akber" =>35,
			);
			echo "<pre>";
			print_r(array_change_key_case($name, CASE_UPPER));
			echo "</pre>";


?>
<?php
//Lower Case.

			$name = array(
				"JAMAL" =>35,
				"KADER" =>35,
				"MAMUN" =>35,
				"AKBER" =>35,
			);
			echo "<pre>";
			print_r(array_change_key_case($name, CASE_LOWER));
			echo "</pre>";
?>