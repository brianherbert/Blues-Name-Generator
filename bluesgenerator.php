<?php
	$first = array(
		'Fat',
		'Buddy',
		'Sticky',
		'Old',
		'Texas',
		'Hollerin\'',
		'Ugly',
		'Brown',
		'Happy',
		'Boney',
		'Curly',
		'Pretty',
		'Jailhouse',
		'Peg Leg',
		'Red',
		'Sleepy',
		'Bald',
		'Skinny',
		'Blind',
		'Big',
		'Yella',
		'Toothless',
		'Screamin\'',
		'Fat Boy',
		'Washboard',
		'Steel-Eye'
	);
	
	$second = array(
		'Bones',
		'Money',
		'Harp',
		'Legs',
		'Eyes',
		'Lemon',
		'Killer',
		'Hips',
		'Lips',
		'Fingers',
		'Boy',
		'Liver',
		'Gumbo',
		'Foot',
		'Mama',
		'Back',
		'Duke',
		'Dog',
		'Bad Boy',
		'Baby',
		'Chicken',
		'Pickles',
		'Sugar',
		'Willy',
		'Tooth',
		'Smoke'
	);
	
	$third = array(
		'Jackson',
		'McGee',
		'Hopkins',
		'Dupree',
		'Green',
		'Brown',
		'Jones',
		'Rivers',
		'Malone',
		'Washington',
		'Smith',
		'Parker',
		'Lee',
		'Thompkins',
		'King',
		'Bradley',
		'Hawkins',
		'Jefferson',
		'Davis',
		'Franklin',
		'White',
		'Jenkins',
		'Bailey',
		'Johnson',
		'Blue',
		'Allison'
	);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>

<title>Blues Name Generator</title>

<link href="http://fonts.googleapis.com/css?family=Cambo" rel="stylesheet" type="text/css">

<style type="text/css">

body {
	margin: auto;
	font-family: 'Metrophobic', Arial, serif;
	font-weight: 400;
	font-size:72px;
	text-align:center;
}

</style>

</head>

<body>

<form method="get">
	<input type="hidden" name="r" value="<?php echo base64_encode(mt_rand(1,26).','.mt_rand(1,26).','.mt_rand(1,26)); ?>">
	<input type="submit" value="Generate Your Name" />
</form>

<br/>

<?php
	if ( isset($_GET['r']) )
	{
		$r = explode(',',base64_decode($_GET['r']));
		echo $first[$r[0]].' '.$second[$r[1]].' '.$third[$r[2]];
	}
?>

</body>
</html>