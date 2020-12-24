<?php
$conn = mysqli_connect("localhost", "root", "Root.1234", "superHeroes");
$sql = "SELECT `id`,`icon` FROM `superHeroes`";
$r = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Super Heroes</title>
	<meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="images/icon.png">
	<?php include 'func.php'; ?>

</head>
<body>
  <script>
  
  </script>

	<body>
		<a href="index.php">
			<h1 class="linkHome">Home</h1>
		</a><br>
		<div class="ravnContainer">
			<div id="ravnLeft">
					<img class="ravnImageLeft" >

			</div>
			<div id="ravnCenter">
				<div class="herotop">
					<table>
						<tr>
							<td id="name1"></td>
							<td class="tblcenter">
								<h3>name</h3>
							</td>
							<td id="name2"></td>
						</tr>
						<tr>
							<td id="weight1"></td>
							<td class="tblcenter">
								<h3>weight</h3>
							</td>
							<td id="weight2"></td>
						</tr>
						<tr>
							<td id="height1"></td>
							<td class="tblcenter">
								<h3>height</h3>
							</td>
							<td id="height2"></td>
						</tr>
						<tr>
							<td id="group1"></td>
							<td class="tblcenter">
								<h3>group</h3>
							</td>
							<td id="group2"></td>
						</tr>
						<tr>
							<td id="origin1"></td>
							<td class="tblcenter">
								<h3>origin</h3>
							</td>
							<td id="origin2"></td>
						</tr>
						<tr>
							<td id="powers1"></td>
							<td class="tblcenter">
								<h3>powers</h3>
							</td>
							<td id="powers2"></td>
						</tr>

					</table>
				</div>
				<div class="heroicon">
					<?php
					while ($result = mysqli_fetch_assoc($r)) { ?>
						<div id="mydiv<?php echo $result['id']; ?>" value="<?php echo $result['id']; ?>" class="heroDivClass" style="background: url(<?php echo $result['icon'] ?>);background-size: cover;	">
						</div>

					<?php } ?>
					<script type="text/javascript">

					</script>
				</div>
			</div>
			<div id="ravnRight">
					<img class="ravnImageLeft">
			</div>
		</div>

		<script>
$(document).ready(function(){
  
			heroDivClass = document.getElementsByClassName("heroDivClass");
			if (window.innerWidth > 350) {
				for (var i = 0; i < heroDivClass.length; i++) {
					heroDivClass[i].style.width = "10%"
					heroDivClass[i].style.height = "11vh"
				}
			} else {
				for (var i = 0; i < heroDivClass.length; i++) {
					heroDivClass[i].style.width = "10%"
					heroDivClass[i].style.height = "5vh"
				}
			}
			var ravnLeft = $('#ravnLeft')[0];
			var ravnRight = $('#ravnRight')[0];
			if (window.innerWidth < 700 && window.innerWidth > 350) {
				ravnLeft.style = "width:50%;height:47vh;";
				ravnRight.style = "width:50%;height:47vh;";
			} else if (window.innerWidth > 700) {
				ravnLeft.style = "width:28%;height:76vh;";
				ravnRight.style = "width:28%;height:76vh;";
			} else {
				ravnLeft.style = "width:47%;height:46vh;";
				ravnRight.style = "width:47%;height:46vh;";
			}
			var hero1 = $("#mydiv1")[0];var hero2 = $("#mydiv2")[0];
			var hero3 = $("#mydiv3")[0];var hero4 = $("#mydiv4")[0];
			var hero5 = $("#mydiv5")[0];var hero6 = $("#mydiv6")[0];
			var hero7 = $("#mydiv7")[0];
			var divLeft = $("#ravnLeft")[0];
			var divRight = $("#ravnRight")[0];
      var ravnContainer = $(".ravnContainer");
			if (window.innerWidth > 350) {
				dragElement(hero1, divRight, divLeft, 87, 15, ravnContainer);
				dragElement(hero2, divRight, divLeft, 87, 26, ravnContainer);
				dragElement(hero3, divRight, divLeft, 87, 37, ravnContainer);
				dragElement(hero4, divRight, divLeft, 87, 48, ravnContainer);
				dragElement(hero5, divRight, divLeft, 87, 59, ravnContainer);
				dragElement(hero6, divRight, divLeft, 87, 70, ravnContainer);
				dragElement(hero7, divRight, divLeft, 87, 80, ravnContainer);

			} else {
				dragElement(hero1, divRight, divLeft, 57, 15, ravnContainer);
				dragElement(hero2, divRight, divLeft, 57, 26, ravnContainer);
				dragElement(hero3, divRight, divLeft, 57, 37, ravnContainer);
				dragElement(hero4, divRight, divLeft, 57, 48, ravnContainer);
				dragElement(hero5, divRight, divLeft, 57, 59, ravnContainer);
				dragElement(hero6, divRight, divLeft, 57, 70, ravnContainer);
				dragElement(hero7, divRight, divLeft, 57, 80, ravnContainer);
      }
});
      
		</script>
	</body>

</html>