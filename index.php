<?php
	
	require_once "../includes/db.php"; // add ../ when working

	$table = "projects";
	$query = "SELECT * FROM {$table} LIMIT 1";
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
		<li class="main-nav-li"><a class="nav-link" href="recipes.php">Recipes</a></li>
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
<div class="recipe-gallery-container-home">
	<figure class="figure-images-home">
		<a href="view-recipe.html">
			<img class="recipe-gallery-image-home" src="img/shiitake-burger.jpg" alt="Shiitake & Hoisin Beef Burgers with Miso Mayonnaise & Roasted Sweet Potatoes">
		</a>
			<a href="view-recipe.html">
				<figcaption class="figure-text">Shiitake & Hoisin Beef Burgers with Miso Mayonnaise & Roasted Sweet Potatoes
			</figcaption>
		</a>
	</figure>

	<figure class="figure-images-home">
		<a href="view-recipe.html">
			<img class="recipe-gallery-image-home" src="img/thai-curry-chicken.jpg" alt="Thai Curry Chicken with Carrots & Bok Choy">
		</a>
			<a href="view-recipe.html">
				<figcaption class="figure-text">Thai Curry Chicken with Carrots & Bok Choy
			</figcaption>
		</a>
	</figure>

	<figure class="figure-images-home">
		<a href="view-recipe.html">
			<img class="recipe-gallery-image-home" src="img/general-tso-chicken.jpg" alt="General Tso's Chicken with Bok Choy & Jasmine Rice">
		</a>
			<a href="view-recipe.html">
				<figcaption class="figure-text">General Tso's Chicken with Bok Choy & Jasmine Rice
				</figcaption>
		</a>
	</figure>
</div>

<!-- OTHER FAVORITE RECIPES -->
<div class="recipe-gallery-container-home">
<figure>
	<a href="view-recipe.html">
		<img id="bigger-recipe-image" class="recipe-gallery-image-home" src="img/pork-chorizo-tacos.jpg" alt="Pork Chorizo Tacos with Cheesy Roasted Potatoes">
	</a>
		<a href="view-recipe.html">
			<figcaption class="figure-text">Pork Chorizo Tacos with Cheesy Roasted Potatoes
			</figcaption>
		</a>
			<p class="recipe-image-text">These tacos get plenty of bold flavor from ground chorizo (a type of spiced pork sausage), cooked into a delightfully saucy filling with cabbage and fresh citrus juices. On the side, we’re livening up roasted potatoes with garlic and Cotija cheese.</p>
		</figure>

<figure>
	<a href="view-recipe.html"><img id="bigger-recipe-image" class="recipe-gallery-image" src="img/smoked-gouda-bread.jpg" alt="Smoked Gouda & Mushroom Flatbread with Endive & Apple Salad"></a>
		<a href="view-recipe.html"><figcaption class="figure-text">Smoked Gouda & Mushroom Flatbread with Endive & Apple Salad</figcaption></a>
			<p class="recipe-image-text">For this rustic seasonal meal, we’re topping flatbread—made by rolling out pizza dough until extra-thin—with two kinds of cheeses, including nutty smoked Gouda. Cremini mushrooms add even more irresistibly savory flavor to the flatbread, balanced by a bright, crisp endive and apple salad.</p>
		</figure>
	</div>

<!-- OTHER FAVORITE RECIPES -->
<div class="recipe-gallery-container-home">
	<figure class="figure-images-home">
		<a href="view-recipe.html">
			<img class="recipe-gallery-image-home" src="img/spicy-pork.jpg" alt="Spicy Pork & Korean Rice Cakes with Bok Choy">
		</a>
			<a href="view-recipe.html"><figcaption class="figure-text">Spicy Pork & Korean Rice Cakes with Bok Choy</figcaption></a>
	</figure>

	<figure class="figure-images-home">
		<a href="view-recipe.html">
			<img class="recipe-gallery-image-home" src="img/roasted-pork.jpg" alt="Roasted Pork & Broccoli with Apple, Cheese Sauce, & Garlic Breadcrumbs">
		</a>
			<a href="view-recipe.html">
				<figcaption class="figure-text">Roasted Pork & Broccoli with Apple, Cheese Sauce, & Garlic Breadcrumbs</figcaption>
		</a>
	</figure>

	<figure class="figure-images-home">
		<a href="view-recipe.html">
			<img class="recipe-gallery-image-home" src="img/steak.jpg" alt="Seared Steaks & Garlic Butter with Oven Fries">
		</a>
			<a href="view-recipe.html">
				<figcaption class="figure-text">Seared Steaks & Garlic Butter with Oven Fries
			</figcaption></a>
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