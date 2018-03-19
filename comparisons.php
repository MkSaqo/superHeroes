<?php 
$id = $_GET["id"];
$conn = mysqli_connect("localhost","root","root","superHeroes");
$sql = "SELECT * FROM `superHeroes`";
$r = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="style.css">
			 <script type="text/javascript" src="func.js"></script>

		</head>
	<body>

<body>
		<a href="index.php"><h1 class="home">Home</h1></a><br>
	<div class="ravnContainer">
		<div id="ravnLeft" style="width:33%;height:90vh;"></div>
		<div id="ravnCenter">
			<div id="hero1top"></div>
			<div id="hero2bottom"></div>
			<div class="heroicon">
				<?php while ($result = mysqli_fetch_assoc($r)) {?>
				<div id="mydiv<?php echo $result['id']; ?>" class="heroDivClass" 
					style="height:11%;width:5.7%;
					  background: url(<?php echo $result['icon']?>);background-size: cover;	">
				</div>
				
				<?php }?> 
			</div>
		</div>
		<div id="ravnRight" style="width:33%;height:90vh; "></div>
	</div>
		
	<script>
		var hero1 = document.getElementById("mydiv1");
		var hero2 = document.getElementById("mydiv2");
		var hero3 = document.getElementById("mydiv3");
		var hero4 = document.getElementById("mydiv4");
		var hero5 = document.getElementById("mydiv5");
		var hero6 = document.getElementById("mydiv6");
		var hero7 = document.getElementById("mydiv7");
		var divLeft = document.getElementById("ravnLeft");
		var divRight = document.getElementById("ravnRight");
		var hero1top = document.getElementById("hero1top");
		var hero2bottom = document.getElementById("hero2bottom");
		var ravnContainer = document.getElementsByClassName("ravnContainer");
		dragElement(hero1,divRight,divLeft,80,34,ravnContainer,hero1top,hero2bottom);
		dragElement(hero2,divRight,divLeft,80,40,ravnContainer,hero1top,hero2bottom);
		dragElement(hero3,divRight,divLeft,80,46,ravnContainer,hero1top,hero2bottom);
		dragElement(hero4,divRight,divLeft,80,52,ravnContainer,hero1top,hero2bottom);
		dragElement(hero5,divRight,divLeft,68,37,ravnContainer,hero1top,hero2bottom);
		dragElement(hero6,divRight,divLeft,68,43,ravnContainer,hero1top,hero2bottom);
		dragElement(hero7,divRight,divLeft,68,49,ravnContainer,hero1top,hero2bottom);

 	</script>

	</body>
</html>