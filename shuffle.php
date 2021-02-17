
<?php
//Shuffle array function.
	$color = array("Red", "Green", "Purple", "Blue", "Yellow", "Pink");
			echo "<pre>";
			print_r($color );
			echo "</pre>";
			
			shuffle($color );
			
			echo "<pre>";
			print_r($color );
			echo "</pre>";
/*Result:
Array
(
    [0] => Red
    [1] => Green
    [2] => Purple
    [3] => Blue
    [4] => Yellow
    [5] => Pink
)
Array
(
    [0] => Purple
    [1] => Pink
    [2] => Red
    [3] => Green
    [4] => Yellow
    [5] => Blue
)
)*/
?>
<?php?>