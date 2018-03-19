<?php 
$id = $_GET["id"];
$conn = mysqli_connect("localhost","root","root","superHeroes");
$sql = "SELECT * FROM `superHeroes` WHERE `id` = $id ";
$r = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($r);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Super Heroes</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body class="bod" style="
		background-image: url('<?php echo $result["background"] ?>') ;">
		<div class="hero">
			<a href="index.php"><h1 class="home">Home</h1></a><br>
			<a href="comparisons.php"><h1 class="ravn">Comparisons</h1></a>
			<div class="heroimg">
				<div class="left">
					<img src="<?php echo($result['page1']) ?>" class="classHero">
				</div>
			<div class="right">
				<h1 class="name"><?php echo $result['name']; ?></h1>
				<h2> <span>	 Real Name:</span> <?php echo $result['realName']; ?></h2>
				<h2> <span>	 Height: </span><?php echo $result['height']; ?></h2>
				<h2> <span>	 Weight: </span><?php echo $result['weight']; ?></h2>
				<h2> <span>	 Abilities: </span><?php echo $result['abilities']; ?></h2>
				<h2> <span>	 Group: </span><?php echo $result['group']; ?></h2>
				<h2> <span>	 Origin: </span><?php echo $result['origin']; ?></h2>
				<h2 class="desPow"><span>Desc: </span></h2><p><?php echo $result['desc']; ?></p>
				<h2 class="desPow"><span>Powers: </span></h2><p><?php echo $result['powers']; ?></p>
				<a href="image.php?src=<?php echo $result['image1'] ?>"><img src="<?php echo $result['image1'] ?>" class="miniImg"></a>
				<a href="image.php?src=<?php echo $result['image2'] ?>"><img src="<?php echo $result['image2'] ?>" class="miniImg"></a>
				<a href="image.php?src=<?php echo $result['image3'] ?>"><img src="<?php echo $result['image3'] ?>" class="miniImg"></a>
				<a href="image.php?src=<?php echo $result['image4'] ?>"><img src="<?php echo $result['image4'] ?>" class="miniImg"></a>
				<a href="image.php?src=<?php echo $result['image5'] ?>"><img src="<?php echo $result['image5'] ?>" class="miniImg"></a>
				<a href="image.php?src=<?php echo $result['image6'] ?>"><img src="<?php echo $result['image6'] ?>" class="miniImg"></a>
				<a href="image.php?src=<?php echo $result['image7'] ?>"><img src="<?php echo $result['image7'] ?>" class="miniImg"></a>
				<a href="image.php?src=<?php echo $result['image8'] ?>"><img src="<?php echo $result['image8'] ?>" class="miniImg"></a>
			</div>
		</div>


		</div>
	<body>
</html>