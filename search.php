<?php
	require_once "includes/db.php";

	$table = "projects";
 	$result = mysqli_query($connection, $query);

  if (!$result) {
    die ("Database query failed.");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		Search Results - IDM232
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Puritan:700" rel="stylesheet">
	</head>
<body>

<!-- NAVIGATION -->
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
		<li class="main-nav-li"><a class="selected-nav-link" href="recipes.php">Recipes</a></li>
		<li class="main-nav-li"><a class="nav-link" href="help.html">Help</a></li>
	</ul>
</nav>
<!-- ADD FILTER SYSTEM -->


<?php
/*
  $title = 'title';
  $ingredients = 'ingredients';
  $description = 'description';
*/

	if (isset($_POST['search'])) {
		$search = mysqli_real_escape_string($connection, $_POST['search']); //make sure db is safe
		$query = "SELECT * FROM projects WHERE title LIKE '%$search%' OR ingredients LIKE '%$search%' OR description LIKE '%$search%'"; //keyword searches
		$result = mysqli_query($connection, $query);
		$queryResult = mysqli_num_rows($query);

	/*	echo "There are '.$queryResult.' result(s) found."; */

		if ($queryResult > 0) {

			while ($row = mysqli_fetch_assoc($result)) { ?>

<div class="recipe-gallery-container">
	<figure class="figure-images">
		<a href="view-recipe.php?id=<?php echo $row['id'] ?>">
			<img class="recipe-gallery-image-top" id="recipe-gallery-image-top" src="<?php echo $row['img']; ?>" 
			alt="<?php echo $row['title']; ?>
		</a>
			<a href="view-recipe.php?id=<?php echo $row['id'] ?>">
				<figcaption class="figure-text">
					<?php echo $row['title']; ?>
				</figcaption>
			</a>
	</figure>
</div>
            <?php }
	}
}
	 else {
			echo "No results found."; //try linking to 'no-results'?
		}
?>


<?php
        mysqli_free_result($result);
      ?>
      <?php
        mysqli_close($connection);
      ?>



</body>
</html>
