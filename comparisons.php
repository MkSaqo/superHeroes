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
		<div id="bl"></div>
		<div id="gr"></div>
		<script type="text/javascript">
			
		</script>
		<!-- <div class="ravnContainer">
			<div class="ravnLeft"></div>
			<div class="ravnCenter">
				<div class="ravnTop"></div>
				<div class="ravnBottom">
					<?php while ($result = mysqli_fetch_assoc($r)) {?>
					<img class="icon" src="<?php echo $result['icon']; ?>">		
				
				<?php }?>
				</div>
			</div>
			<div class="ravnRight">
				
			</div>
		</div> -->

	<!-- /body>
</html> -->


<style>
#mydiv {
    position: absolute;
    cursor: move;    
	top: 0; left: 34%;
}
#mydiv1{
    position: absolute;
    cursor: move; 
	top: 0; left: 44%;
}

#mydiv2{
    position: absolute;
    cursor: move; 
	top: 0; left: 54%;
}

#divLeft ,#divRight{
    display: inline-block;  

}
#divCenter{
	vertical-align: top;
	width: 425px;
	display: inline-block;
}
.shlor{
	margin: auto;
	width: 1300px;
}

</style>
<body>
	<div class="shlor">
		<div id="divLeft"  style="width:30%;height:701px; "></div>
		<div id="divCenter">
			<div id="mydiv" style= "height:100px;width:100px;background: #2196F3;" ></div>
			<div id="mydiv1" style="height:100px;width:100px;background: red;" ></div>
			<div id="mydiv2" style="height:100px;width:100px;background: orange;" ></div>
		</div>
		<div id="divRight" style="width:30%;height:701px; "></div>
	</div>
		
	<script>
		var m = document.getElementById("mydiv");
		var m1 = document.getElementById("mydiv1");
		var m2 = document.getElementById("mydiv2");
		var divLeft = document.getElementById("divLeft");
		var divRight = document.getElementById("divRight");
		var shloe = document.getElementsByClassName("shlor");
		dragElement(m,divRight,divLeft,0,34,shloe);
		dragElement(m1,divRight,divLeft,0,44,shloe);
		dragElement(m2,divRight,divLeft,0,54,shloe);

 	</script>

</body>
</html>