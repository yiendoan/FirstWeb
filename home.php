<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
	?>
   <?php
		include 'dbh.php';
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" type="text/css" href="style_home.css">
	</head>
	<body>
		<form action="search.php"method="POST">
			<input type="text" name="search" placeholder="Search">
			<button type="submit" name="submit-search"></button>
		</form>

		<h1>Front gage</h1>
		<h2>All articles:</h2>

		<div class="article-container">
			<?php
				$sql = "SELECT * FROM article";
				$result =  mysqli_query($conn, $sql);
				$queryResults = mysqli_num_rows($result);

				if($queryResults > 0){
					while($row =  mysqli_fetch_assoc($result)){
						echo"<div>
							<h3>".$row['a_title']."</h3>
							<p>".$row['a_text']."</p>
							<p>".$row['a_date']."</p>
							<p>".$row['a_author']."</p>
						</div>"
					}
				}
			?>

	</body>
	</html>
	<?php
}
else {
    header("Location: index.php");
    exit();
}
?>