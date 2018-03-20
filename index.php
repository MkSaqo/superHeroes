<!DOCTYPE html>
<html>
	<head>
		<title>Super Heroes</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" href="images/icon.png">

	</head>
	<body>
		<div class="home">
			<a href="index.php"><h1 class="home">Home</h1></a><br>
			<a href="comparisons.php"><h1 class="ravn">Comparisons</h1></a>
			<?php 
			$conn = mysqli_connect("localhost","root","root","superHeroes");
			$sql = "SELECT * FROM `superHeroes`";
			$r = mysqli_query($conn,$sql);
			while($result = mysqli_fetch_assoc($r)){
				?>
					<div class="mec">
						<a href="hero.php?id=<?php echo $result['id'] ?>">
							<img src="<?php echo($result['page1']) ?>" class="homeImages">
							<h2 class="homeNames"><?php echo $result['name'] ?></h2>
						</a>
					</div>
				<?php
			}
			?>
			<p id="homeTitle">Super Hero Agency</p>
			<p id="homeDesc">
				The word 'superhero' dates to at least 1917 Antecedents of the archetype include such folkloric heroes as Robin Hood, who adventured in distinctive clothing The 1903 play The Scarlet Pimpernel and its spinoffs popularized the idea of a masked avenger and the superhero trope of a secret identity Shortly afterward, masked and costumed pulp fiction characters such as Zorro (1919), The Shadow (1930) and comic strip heroes, such as the Phantom (1936) began appearing, as did non-costumed characters with super strength, including Patoruzú (1928), the comic-strip character Popeye (1929) and novelist Philip Wylie's protagonist Hugo Danner (1930)In the 1930s, both trends came together in some of the earliest superpowered costumed heroes such as Japan's Ōgon Bat (visualized in painted panels used by kamishibai oral storytellers in Japan since 1931), Mandrake the Magician (1934), Superman in 1938 and Captain Marvel (1939) at the beginning of the Golden Age of Comic Books. The precise era of the Golden Age of Comic Books is disputed, though most agree that it was started with the launch of Superman in 1938 Superman is the most recognizable Superhero to this day The success of Superman spawned a whole new genre of characters with secret identities and superhuman powers – the Superhero genre
		</p>
		</div>
	<body>
</html>