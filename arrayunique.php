
<?php
//Array Unique function.

$color = array(
					"a"=>"red",
					"b"=>"green",
					"c"=>"yellow",
					"d"=>"purple",
					"e"=>"green",
					"f"=>"red",
					"d"=>"purple"
					);
			$result = array_unique($color);
		
		echo "<pre>";
			print_r($result);
		echo "</pre>";
/*Result:
Array
(
    [a] => red
    [b] => green
    [c] => yellow
    [d] => purple
)

*/

?>