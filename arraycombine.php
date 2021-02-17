<?php
		$name = array("Akbor", "Mamun", "Jamal");
			$department = array("Computer Science", "Maths", "physics");
			
			$combine = array_combine($name, $department);
			
			echo "<pre>";
			print_r($combine);
			echo "</pre>";
?>

<?php
		$name = array("Akbor", "Mamun", "Jamal");
			$age = array("31", "28", "35");
			
			$combine = array_combine($name, $age);
			
			echo "<pre>";
			print_r($combine);
			echo "</pre>";

?>