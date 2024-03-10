


<?php
$pageTitle = "PHP Loaded Page Title";
$h =  "My first PHP project!";
$p = "This paragraph was created using PHP and HTML!";

$h_2 = "<h2> This heading was entirely created with PHP! </h2>";

define("CONSTANT", "This is a constant", false); //define(Name of const, const content, IsCaseSensitive - by default false);
define("NUMBER", 99, /*true*/); // case sensitive is not supported anymore!

$isThisHard = false;

$var = null;
$var = "Not null anymore";

?>

<!Doctype html>
<html>
	<head>
		<title><?php echo $pageTitle; ?> </title>
	</head>
	<body>
		<h1><?php echo $h; ?></h1>
		<p><?php echo $p; ?></p>
		<div><?php echo $h_2?></div>
		<div id=constants>
			<?php echo CONSTANT; 
			echo "<br>" ;
			echo NUMBER;
			echo "<br>";
			var_dump($isThisHard);
			echo "<br>";
			var_dump($var);
			?>
		</div>

		<div id="statements">
			<form method="post">
				<input placeholder="0" type="number" name="age">
				<input placeholder="red" type="text" name="color">
				<input type="submit">
			</form>
		</div>
	</body>
</html>

<?php 
$age = $_POST["age"];
$color = $_POST["color"];

	$res = "";

	if($age == null){
		$res = "Nothing to see here";
	}

	else if($age < 12){
		$res =  "You are not old enough to use the Internet!";
	}
	else{
		$res = "Welcome to the Internet!";
	}

	echo "Result: $res <br>";


	switch($color){
		case "red":
			$res = "Wow! Your favourite color is red!";
			break;
		case "blue":
			$res = "Your favourite color is blue? Why??";
			break;
		case "green":
			$res = "Your favourite color is green! Mine too!";
			break;
		default:
			$res = "Your favourite color is $color! That's cool!";

	}

	echo "Result: $res <br>";

?>
