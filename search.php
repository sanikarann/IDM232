<?php
	require_once "includes/db.php";

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
		<li class="main-nav-li"><a class="selected-nav-link" href="recipes.html">Recipes</a></li>
		<li class="main-nav-li"><a class="nav-link" href="help.html">Help</a></li>
	</ul>
</nav>
<!-- ADD FILTER SYSTEM -->



<?php
	if (isset($_POST['search'])) {
		$search = mysqli_escape_string($connection, $_POST['search']); //make sure db is safe
		$sql = "SELECT * FROM recipe_table WHERE title LIKE '%$search%' OR ingredients LIKE '%$search%' OR direction_01 LIKE '%$search%' OR direction_02 LIKE '%$search%' OR direction_03 LIKE '%$search%' OR direction_04 LIKE '%$search%' OR direction_05 LIKE '%$search%' OR direction_06 LIKE '%$search%'";
		$result = mysqli_query($connection, $sql);
		$queryResult = mysqli_num_rows($result);

		echo "There are '.$queryResult.' result(s) found.";

		if (queryResult > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class="recipe-gallery-container">
			<figure class="figure-images">
		<a href="view-recipe.html"><img class="recipe-gallery-image-top" id="recipe-gallery-image-top" src="img/placeholder-small.png" alt="placeholder"></a>
			<a href="view-recipe.html"><figcaption class="figure-text">Title of recipe</figcaption></a>
	</figure>

	<figure class="figure-images">
		<a href="view-recipe.html"><img class="recipe-gallery-image-top" src="img/placeholder-small.png" alt="placeholder"></a>
			<a href="view-recipe.html"><figcaption class="figure-text">Title of recipe</figcaption></a>
	</figure>

	<figure class="figure-images">
		<a href="view-recipe.html"><img class="recipe-gallery-image-top" src="img/placeholder-small.png" alt="placeholder"></a>
			<a href="view-recipe.html"><figcaption class="figure-text">Title of recipe</figcaption></a>
	</figure>
</div>

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

<div class="recipe-gallery-container">
	<figure class="figure-images">
		<a href="view-recipe.html"><img class="recipe-gallery-image" src="img/placeholder-small.png" alt="placeholder"></a>
			<a href="view-recipe.html">
				<figcaption class="figure-text">Title of recipe</figcaption></a>
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
</div>";
			}
		} else {
			echo "No results found.";
		}
	}
?>




<!--
 <?php
        while($row = mysqli_fetch_assoc($result)) { 
    ?>
        <div class="project">
                <figure>
                    <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                    <figcaption>
                        <?php echo $row['name']; ?>
                    </figcaption>
                </figure>
                <p>
                    <?php echo $row['description']; ?>
                </p>
            </div>
            <?php
                }
            ?>
        </div>
-->
</body>
</html>
