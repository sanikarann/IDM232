<?php
	
	require_once "../includes/db.php";

	$table = "recipe_table";
	$query = "SELECT * FROM {$table} limit 1";
	$result = mysqli_query($connection, $query);

  if (!$result) {
    die ("Database query failed.");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		Home - IDM232
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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


		<li class="main-nav-li"><a class="selected-nav-link" href="index.php">Home</a></li>
		<li class="main-nav-li"><a class="nav-link" href="recipes.html">Recipes</a></li>
		<li class="main-nav-li"><a class="nav-link" href="help.html">Help</a></li>
	</ul>
</nav>






  <?php while ($row = mysqli_fetch_assoc($result)) {

   ?>

<!-- TOP RECIPE -->
<div class="figure-container">
	<figure id="top-recipe">
		<a href="view-recipe.html">
			<img id="top-image" src="<?php echo $row['img']; ?>" 
			alt="<?php echo $row['title']; ?> class="top-figure-image" >
		</a>
			<a href="view-recipe.html">
				<figcaption id="top-figure-text" class="figure-text">
					   <?php echo $row['title']; ?>
				</figcaption></a>
			<p class="top-image-text">We’re amping up chicken breasts with a glaze of smoky ancho chile paste and fresh orange juice in this recipe. On the side, roasted carrots and lightly creamy, golden raisin-studded rice perfectly accent the sweetness of the glaze.</p>


	</figure>

</div>


<!-- OTHER FAVORITE RECIPES -->
<div class="recipe-gallery-container">
	<figure class="figure-images">
		<a href="view-recipe.html"><img class="recipe-gallery-image" src="img/placeholder-small.png" alt="placeholder"></a>
			<a href="view-recipe.html"><figcaption class="figure-text">Title of recipe</figcaption></a>
	</figure>

	<figure class="figure-images">
		<a href="view-recipe.html"><img class="recipe-gallery-image" src="img/placeholder-small.png" alt="placeholder"></a>
			<a href="view-recipe.html"><figcaption class="figure-text">Title of recipe</figcaption></a>
	</figure>

	<figure class="figure-images">
		<a href="view-recipe.html"><img class="recipe-gallery-image" src="img/placeholder-small.png" alt="placeholder"></a>
			<a href="view-recipe.html"><figcaption class="figure-text">Title of recipe</figcaption></a>
	</figure>
</div>

<!-- OTHER FAVORITE RECIPES -->
<div class="recipe-gallery-container">
<figure>
	<a href="view-recipe.html"><img class="recipe-gallery-image" src="img/placeholder.png" alt="placeholder"></a>
		<a href="view-recipe.html"><figcaption class="figure-text">Title of recipe</figcaption></a>
			<p class="recipe-image-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
		</figure>

<figure>
	<a href="view-recipe.html"><img class="recipe-gallery-image" src="img/placeholder.png" alt="placeholder"></a>
		<a href="view-recipe.html"><figcaption class="figure-text">Title of recipe</figcaption></a>
			<p class="recipe-image-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
		</figure>
	</div>

<!-- OTHER FAVORITE RECIPES -->
<div class="recipe-gallery-container">
	<figure class="figure-images">
		<a href="view-recipe.html"><img class="recipe-gallery-image" src="img/placeholder-small.png" alt="placeholder"></a>
			<a href="view-recipe.html"><figcaption class="figure-text">Title of recipe</figcaption></a>
	</figure>

	<figure class="figure-images">
		<a href="view-recipe.html"><img class="recipe-gallery-image" src="img/placeholder-small.png" alt="placeholder"></a>
			<a href="view-recipe.html"><figcaption class="figure-text">Title of recipe</figcaption></a>
	</figure>

	<figure class="figure-images">
		<a href="view-recipe.html"><img class="recipe-gallery-image" src="img/placeholder-small.png" alt="placeholder"></a>
			<a href="view-recipe.html"><figcaption class="figure-text">Title of recipe</figcaption></a>
	</figure>
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