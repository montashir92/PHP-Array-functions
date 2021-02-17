
<?php
//Array sum function.
$sum = array(10, 20, 30);
			$result = array_sum($sum);
						
			echo $result;
/*Result:
60

*/
?>

<?php
//Array sum function associative array.

$sum = array(
					"a"=>"50",
					"b"=>"10",
					"c"=>"20"
					);
			$result = array_sum($sum);
						
			echo "Total :".$result;
/*Result:
Total :80

*/
?>