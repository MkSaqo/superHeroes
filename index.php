<!DOCTYPE html>
<html>
	<head>
		<title>Super Heroes</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php 
		$conn = mysqli_connect("localhost","root","root","superHeroes");
		$sql = "SELECT * FROM `superHeroes` ";
		$r = mysqli_query($conn,$sql);
		// $result = mysqli_fetch_assoc($r);
		while($result = mysqli_fetch_assoc($r)){
			?>
			<article>
				<h1><?php echo $result['name'] ?></h1>
				<img src="<?php echo($result['header_image']) ?>"height="200" width="200">
				<img src="<?php echo($result['icon']) ?>"   height="200" width="200">
				<img src="<?php echo($result['image1']) ?>" height="200" width="200">
				<img src="<?php echo($result['image2']) ?>" height="200" width="200">
				<img src="<?php echo($result['image3']) ?>" height="200" width="200">
				<img src="<?php echo($result['image4']) ?>" height="200" width="200">
				<img src="<?php echo($result['image5']) ?>" height="200" width="200">
				<img src="<?php echo($result['image6']) ?>" height="200" width="200">
				<img src="<?php echo($result['image7']) ?>" height="200" width="200">
				<img src="<?php echo($result['image8']) ?>" height="200" width="200">
				<img src="<?php echo($result['image9']) ?>" height="200" width="200">
				<img src="<?php echo($result['background']) ?>" height="200" width="200">
				<img src="<?php echo($result['page1']) ?>"  height="200"   width="200">
			</article>

			<?php
		}
		?>
	
		
	</body>
</html>