<?php
//Array key exists.
$arr = array(
				"name" =>"Rohim",
				"age" =>"35"
			
			);
			if(array_key_exists("name", $arr)){
				echo "Key alredy exists.";
			}
			else
			{
				echo "key does not exists";
			}
/*Result;
Key alredy exists.

*/
?>

<?php
$arr = array(
				"name" =>"Rohim",
				"age" =>"35"
			
			);
			if(array_key_exists("nam", $arr)){
				echo "Key alredy exists.";
			}
			else
			{
				echo "key does not exists";
			}
/*Result:
key does not exists
*/			
?>
<?php
$arr = array("name", "age");
			if(array_key_exists(0, $arr)){
				echo "Key alredy exists.";
			}
			else
			{
				echo "key does not exists";
			}
/*Result:
Key alredy exists.

*/
?>

<?php
$arr = array("name", "age");
			if(array_key_exists(2, $arr)){
				echo "Key alredy exists.";
			}
			else
			{
				echo "key does not exists";
			}
/*Result:
key does not exists

*/
?>