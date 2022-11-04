<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<h1>Pirma uzduotis</h1>";

$masyvas = [];

for ($i = 0; $i < 30; $i++) {
	array_push($masyvas, rand(5, 25));
}

print_r($masyvas);

echo "<h1>Antra uzduotis</h1>";
echo "<h1>A</h1>";
$counter = 0;
for ($i = 0; $i < count($masyvas); $i++) {
	if ($masyvas[$i] > 10) {
		$counter++;
	}
}
echo $counter;

echo "<h1>B</h1>";

echo max($masyvas);

echo "<h1>C</h1>";

echo array_sum($masyvas);

echo "<h1>D</h1>";

$naujasMasyvas = [];

for ($i = 0; $i < count($masyvas); $i++) {
	array_push($naujasMasyvas, $masyvas[$i] - $i);
}

print_r($naujasMasyvas);

echo "<h1>E</h1>";

for ($i = 0; $i < 10; $i++) {
	array_push($masyvas, rand(5, 25));
}

print_r($masyvas);

echo "<h1>F</h1>";

$poriniuMasyvas = [];
$neporiniuMasyvas = [];

for ($i = 0; $i < count($masyvas); $i++) {
	if ($i % 2 == 0) {
		array_push($poriniuMasyvas, $masyvas[$i]);
	} else {
		array_push($neporiniuMasyvas, $masyvas[$i]);
	}
}

echo implode(" ", $poriniuMasyvas);
echo "<br><br>";
echo implode(" ", $neporiniuMasyvas);

echo "<h1>G</h1>";

for ($i = 0; $i < count($masyvas); $i++) {
	if (($i % 2 == 0) && $masyvas[$i] > 15) {
		$masyvas[$i] = 0;
	}
}

echo implode(" ", $masyvas);

echo "<h1>H</h1>";

print_r($masyvas);
$indexes = "";

for ($i = 0; $i < count($masyvas); $i++) {
	if ($masyvas[$i] > 10) {
		$indexes .= "$i";
		break;
	}
}

echo "<br><br>" . $indexes;

echo "<h1>I</h1>";

print_r($masyvas);

for ($i = 1; $i < 40; $i++) {
	if ($i % 2 == 0) {
		unset($masyvas[$i]);
	}
}

print_r($masyvas);
?>
</body>
</html>