


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
	</body>
</html>
