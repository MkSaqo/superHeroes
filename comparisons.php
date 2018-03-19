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
	<div class="ravnContainer">
		<div id="ravnLeft" key='0'  style="width:30%;height:90vh; "></div>
		<div id="ravnCenter">
			<div class="hero1top"></div>
			<div class="hero2bottom"></div>
			<div class="heroicon">
				<?php while ($result = mysqli_fetch_assoc($r)) {?>
				<div id="mydiv<?php echo $result['id']; ?>" class="heroDivClass" 
					style="height:11%;width:5.7%; background:red;" key="<?php echo $result['id'] ?>" >
					<img class="icon" src="<?php echo $result['icon']; ?>">		
				</div>
				
				<?php }?> -->
			</div>
		</div>
		<div id="ravnRight" style="width:30%;height:90vh; "></div>
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
		var ravnContainer = document.getElementsByClassName("ravnContainer");
		dragElement(hero1,divRight,divLeft,80,34,ravnContainer);
		dragElement(hero2,divRight,divLeft,80,40,ravnContainer);
		dragElement(hero3,divRight,divLeft,80,46,ravnContainer);
		dragElement(hero4,divRight,divLeft,80,52,ravnContainer);
		dragElement(hero5,divRight,divLeft,68,37,ravnContainer);
		dragElement(hero6,divRight,divLeft,68,43,ravnContainer);
		dragElement(hero7,divRight,divLeft,68,49,ravnContainer);

 	</script>

	</body>
</html>