

<?php
		$color_one = array("a"=>"red", "b"=>"green", "c"=>"blue", "d"=>"yellow");
			if(isset($_POST['text'])){
				global $txt;
				$txt = $_POST['text'];
				$result = array_search($txt, $color_one);
				echo "ypu  have search ->$txt and your key is ->$result";
				
			}
/*Result:
ypu have search ->green and your key is ->b

green
  Submit


*/
?>

//write here html file.

		<form action="montashir.php" method="post">
			<input type="text" name="text" value="<?php global $txt; echo $txt; ?>"/>
			<input type="submit" name="Submit"/>
		</form>	
