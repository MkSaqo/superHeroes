<?php 
$id = $_GET["id"];
$conn = mysqli_connect("localhost","root","root","superHeroes");
$sql = "SELECT * FROM `superHeroes`";
$r = mysqli_query($conn,$sql);
?>
<?php 
function img($val){
	$id = $_GET[$val];
	$conn = mysqli_connect("localhost","root","root","superHeroes");
	$sql = "SELECT * FROM `superHeroes` WHERE `id` = $id";
	$r = mysqli_query($conn,$sql);
	$res = mysqli_fetch_assoc($r);
	return $res;
}

 ?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Super Heroes</title>
			<meta charset="utf-8">
			<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="icon" href="images/icon.png">
			<?php include 'func.php'; ?>

		</head>
	<body>

<body>
	<a href="index.php"><h1 class="linkHome">Home</h1></a><br>
	<div class="ravnContainer">
		<div id="ravnLeft" >
			
			<?php 
			$res = img("id");
			if($res){?>
				<img class="ravnImageLeft" src="<?php echo $res['page1'] ?>">
			<?php } ?>
		</div>
		<div id="ravnCenter">
			<div class="herotop">
				<?php $res = img('id')?>
				<?php $res1 = img('id1')?>
				<table>
					<tr>
						<td><?php echo($res['name']) ?></td>	
						<td class="tblcenter"><h3>name</h3></td>
						<td><?php echo($res1['name']) ?></td>
					</tr>
					<tr>
						<td><?php echo($res['weight']) ?></td>	
						<td class="tblcenter"><h3>weight</h3></td>
						<td><?php echo($res1['weight']) ?></td>
					</tr>
					<tr>
						<td><?php echo($res['height']) ?></td>	
						<td class="tblcenter"><h3>height</h3></td>
						<td><?php echo($res1['height']) ?></td>
					</tr>
					<tr>
						<td><?php echo($res['group']) ?></td>	
						<td class="tblcenter"><h3>group</h3></td>
						<td><?php echo($res1['group']) ?></td>
					</tr>
					<tr>
						<td><?php echo($res['origin']) ?></td>	
						<td class="tblcenter"><h3>origin</h3></td>
						<td><?php echo($res1['origin']) ?></td>
					</tr>
					<tr>
						<td><?php echo($res['powers']) ?></td>	
						<td class="tblcenter"><h3>powers</h3></td>
						<td><?php echo($res1['powers']) ?></td>
					</tr>

				</table>	
			</div>
			<div class="heroicon">
				<?php

				 while ($result = mysqli_fetch_assoc($r)) {?>
				<div id="mydiv<?php echo $result['id']; ?>" class="heroDivClass" 
					style=";
					  background: url(<?php echo $result['icon']?>);background-size: cover;	">
				</div>
				
				<?php }?> 
				 	<script type="text/javascript">
			 			heroDivClass= document.getElementsByClassName("heroDivClass");
			 			if(window.innerWidth>350){
				 			for(var i = 0 ;i<heroDivClass.length; i++){
				 				heroDivClass[i].style.width="10%"
				 				heroDivClass[i].style.height="11vh"
				 			}
						}			 		
			 			else{
			 				for(var i = 0 ;i<heroDivClass.length; i++){
				 				heroDivClass[i].style.width="10%"
				 				heroDivClass[i].style.height="5vh"	
							}
			 			}
				 	</script>
			</div>
		</div>
		<div id="ravnRight">
			<script type="text/javascript">
					var ravnLeft = document.getElementById('ravnLeft');
					var ravnRight = document.getElementById('ravnRight');
				if(window.innerWidth<700 && window.innerWidth>350){
					ravnLeft.style="width:50%;height:47vh;";
					ravnRight.style="width:50%;height:47vh;";
				}
				else if(window.innerWidth>700){
					ravnLeft.style="width:28%;height:76vh;";
					ravnRight.style="width:28%;height:76vh;";
				}
				else{
					ravnLeft.style="width:47%;height:46vh;";
					ravnRight.style="width:47%;height:46vh;";
				}
			</script>
			<?php 
			$res = img("id1") ;
			if($res){?>
				<img class="ravnImageLeft" src="<?php echo $res['page1'] ?>">
			<?php }?>
		</div>
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
		if(window.innerWidth>350){
			dragElement(hero1,divRight,divLeft,87,15,ravnContainer,hero1top,hero2bottom);
			dragElement(hero2,divRight,divLeft,87,26,ravnContainer,hero1top,hero2bottom);
			dragElement(hero3,divRight,divLeft,87,37,ravnContainer,hero1top,hero2bottom);
			dragElement(hero4,divRight,divLeft,87,48,ravnContainer,hero1top,hero2bottom);
			dragElement(hero5,divRight,divLeft,87,59,ravnContainer,hero1top,hero2bottom);
			dragElement(hero6,divRight,divLeft,87,70,ravnContainer,hero1top,hero2bottom);
			dragElement(hero7,divRight,divLeft,87,80,ravnContainer,hero1top,hero2bottom);
			
		}
		else{
			dragElement(hero1,divRight,divLeft,57,15,ravnContainer,hero1top,hero2bottom);
			dragElement(hero2,divRight,divLeft,57,26,ravnContainer,hero1top,hero2bottom);
			dragElement(hero3,divRight,divLeft,57,37,ravnContainer,hero1top,hero2bottom);
			dragElement(hero4,divRight,divLeft,57,48,ravnContainer,hero1top,hero2bottom);
			dragElement(hero5,divRight,divLeft,57,59,ravnContainer,hero1top,hero2bottom);
			dragElement(hero6,divRight,divLeft,57,70,ravnContainer,hero1top,hero2bottom);
			dragElement(hero7,divRight,divLeft,57,80,ravnContainer,hero1top,hero2bottom);
		}
 	</script>
	</body>
</html>