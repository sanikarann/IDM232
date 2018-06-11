<?php
	
	require_once "../includes/db.php";

	$id = $_GET['id']; //Grabs id, will display unique recipe
	$table = "projects";
	$query = "SELECT * FROM {$table} WHERE id = $id";
	$result = mysqli_query($connection, $query);

  if (!$result) {
    die ("Database query failed.");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		View Recipe - IDM232
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Puritan:700" rel="stylesheet">
	</head>
<body>
<nav>
	<img id="logo-icon" src="img/food-icon.svg" alt="Site Icon" width="110">
	<!-- LOGO NAME? -->
		<ul id="main-nav-ul">
			<form action="search.php" method="POST" id="form-search">
		<input id="search-bar" type="text" placeholder="Search..." name="search">
			<button type="submit" id="search-button-contain">
				<img id="search-icon" src="img/search-icon.png" alt="search icon" width="20px">
			</button>
		</form>
		<li class="main-nav-li"><a class="nav-link" href="index.php">Home</a></li>
		<li class="main-nav-li"><a class="nav-link" href="recipes.php">Recipes</a></li>
		<li class="main-nav-li"><a class="nav-link" href="help.html">Help</a></li>
	</ul>
</nav>

<?php while ($row = mysqli_fetch_assoc($result)) {

   ?>
<div class="container">
	<figure id="recipe-figure">
		<img class="recipe-pg-image" src="<?php echo $row['img']; ?>" 
			alt="<?php echo $row['title']; ?>
			<figcaption class="recipe-pg-title">
				<?php echo $row['title']; ?>
			</figcaption>
	</figure>

<p class="recipe-pg-desc">
	<?php echo $row['description']; ?>
</p>
</div>

<ul class="recipe-pg-ingr">
	<li class="ingredients">
		<?php echo $row['ingredients'];?>
	</li>
</ul>

<div class="direction-container">
<p class="instructions">
	<?php echo $row['direction-01'];?>
</p>

<p class="instructions">
	<?php echo $row['direction-02'];?>
</p>

<p class="instructions">
	<?php echo $row['direction-03'];?>
</p>

<p class="instructions">
	<?php echo $row['direction-04'];?>
</p>

<p class="instructions">
	<?php echo $row['direction-05'];?>
</p>

<p class="instructions">
	<?php echo $row['direction-06'];?>
</p>
</div>

 <?php } ?>
 
<?php
    mysqli_free_result($result);

    mysql_close($connection);
  ?>

<footer>
	<hr>
	<p>Rann &copy;2018</p>
</footer>

</body>
</html>