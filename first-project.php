


<?php
$pageTitle = "PHP Loaded Page Title";
$h =  "My first PHP project!";
$p = "This paragraph was created using PHP and HTML!";

$h_2 = "<h2> This heading was entirely created with PHP! </h2>";
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
	</body>
</html>
