<div class="container">

	<div class="row">
		<div class="col-xs-9 col-xs-offset-2">
			<h1>Choose your Wine</h1>
		</div>
	</div>

	<form name="myform" method="post" action=" ">
		<div class="row choice">
			<select class="col-xs-8 col-xs-offset-2 option_type">
				<option value=""disabled selected>Type</option>
			<!-- Red Wine -->
				<optgroup label="Red Wine">
					<option value="merlot">Merlot</option>
					<option value="shiraz">Shiraz</option>
					<option value="cabernet_sauvignon">Cabernet Sauvignon</option>
					<option value="pinot_noir">Pinot Noir</option>
					<option value="zinfandel">Zinfandel</option>
					<option value="sangiovese">Sangiovese</option>
				</optgroup>
			<!-- White Wine -->
				<optgroup label="White Wine">
					<option value="sauvignon_blanc">Sauvignon Blanc</option>
					<option value="chardonnay">Chardonnay</option>
					<option value="moscato">Moscato</option>
					<option value="pinot_grigio">Pinot Grigio</option>
					<option value="gewurtztraminer">Gewurtztraminer</option>
					<option value="riesling">Riesling</option>
				</optgroup>
			<!-- Rose' Wine -->
				<optgroup label="Rose' Wine">
					<option value="zinfandel">Zinfandel Blush</option>
					<option value="pinot_noir">Pinot Noir</option>
					<option value="sauvignon">Sauvignon</option>
				</optgroup>
			<!-- Sparkling -->
				<optgroup label="Sparkling Wine">
					<option value="champagne">Champagne</option>
					<option value="cava">Cava</option>
				</optgroup>
			<!-- Fortified Wine -->
				<optgroup label="Fortified Wine">
					<option value="port">Port Sherry</option>
					<option value="marsala">Marsala</option>
					<option value="vermouth">Vermouth</option>
				</optgroup>
			<!-- Dessert Wine -->
				<optgroup label="Dessert">
					<option value="ice">Ice Wine</option>
					<option value="raisin">Raisin Wine</option>
					<option value="noble_rot">Noble Rot Wine</option>
				</optgroup>
			</select>

			<!-- <div class="col-xs-8 col-xs-offset-2 select_price"><h2>Price &gt;</h2></div> -->
			<select class="col-xs-8 col-xs-offset-2 option_price">
				<option value=""disabled selected>Price</option>
				<option value="under_$10">under $10</option>
				<option value="$10-$20">$10-$20</option>
				<option value="$20-$30">$20-$30</option>
				<option value="$30-$40">$30-$40</option>
				<option value="$40_or_more">$40 or more</option>
			</select>

			<select class="col-xs-8 col-xs-offset-2 option_country">
				<option value=""disabled selected>Country</option>
				<option value="argentina">Argentina</option>
				<option value="australia">Australia</option>
				<option value="brazil">Brazil</option>
				<option value="canada">Canada</option>
				<option value="cile">Chile</option>
				<option value="france">France</option>
				<option value="germany">Germany</option>
				<option value="greece">Greece</option>
				<option value="italy">Italy</option>
				<option value="new_zealand">New Zealand</option>
				<option value="portugal">Portugal</option>
				<option value="peru">Peru</option>
				<option value="spain">Spain</option>
			</select>

			<select class="col-xs-8 col-xs-offset-2 option_pairings">
				<option value=""disabled selected>Pairings</option>
			<!-- Beef -->
				<optgroup label="Beef">
					<option value="simple_roasted_grill">Simple/Roasted/Grill</option>
					<option value="rich_sauce">In a rich sauce</option>
					<option value="braised">Braised</option>
					<option value="acid_sauce">In a acid sauce</option>
					<option value="eastern_style">Eastern Style</option>
				</optgroup>
			<!-- Pork -->
				<optgroup label="Pork">
					<option value="simple_basic">Simple/Basic</option>
					<option value="acid_sides">With acid sides</option>
					<option value="barbeque">Barbeque</option>
					<option value="eastern_style">Eastern Style</option>
				</optgroup>
			<!-- Lamb -->
				<optgroup label="Lamb">
					<option value="italian_options">Italian Options</option>
					<option value="french_american">French and American Options</option>
				</optgroup>
			<!-- Poultry -->
				<optgroup label="Poultry">
					<option value="chicken_creamy_sauce">Chicken - Creamy sauce</option>
					<option value="chicken_fried">Chicken - Fried</option>
					<option value="chicken_roast">Chicken - Roast</option>
					<option value="chicken_spicy_smoky">Chicken - Spicy/Smoky</option>
					<option value="turkey_roast">Turkey - Roast</option>
					<option value="duck_game_birds">Duck</option>
					<option value="game_birds">Game Birds</option>
					<option value="eastern_style">Eastern Style</option>
				</optgroup>
			<!-- Fish -->
				<optgroup label="Fish">
					<option value="full_flavor">Full Flavor</option>
					<option value="mild_flavor">Mild Flavor</option>
					<option value="salmon">Salmon</option>
					<option value="caviar">Caviar</option>
				</optgroup>
			<!-- Crustaceans -->
				<optgroup label="Crustaceans">
					<option value="crab">Crab</option>
					<option value="lobster">Lobster</option>
					<option value="oyster">Oyster</option>
					<option value="shrimp">Shrimp</option>
					<option value="scallops">Scallops</option>
				</optgroup>
			<!-- Pasta -->
				<optgroup label="Pasta">
					<option value="lasagne">Lasagne</option>
					<option value="cramy_sauce">Creamy Sauce</option>
					<option value="tomato_sauce">Tomato Sauce</option>
					<option value="light_fish">Light Fish</option>
				</optgroup>
			<!-- Veggie -->
				<optgroup label="Veggie">
					<option value="green_vegetables">Green Vegetables</option>
					<option value="mushroom">Mushroom</option>
					<option value="potatoes">Potatoes</option>
					<option value="tomatoes">Tomatoes</option>
				</optgroup>
			<!-- Cheese -->
				<optgroup label="Cheese">
					<option value="blue">Blue Cheese</option>
					<option value="hard_flavorful">Hard/Flavorful Cheese</option>
					<option value="soft_rich">Soft/Rich Cheese</option>
				</optgroup>
			<!-- Dessert -->
				<optgroup label="Dessert">
					<option value="chocolate">Chocolate</option>
					<option value="creamy">Creamy</option>
					<option value="fruity">Fruity</option>
				</optgroup>
			</select>	
		</div>

	<!-- icon - submit button -->
		<div class="row">
			<div class="col-xs-3 col-xs-offset-4">
				<a href="javascript:void()" onclick="document.getElementById('myform').submit();">
				<img src="images/icon_search_box" class="icon_search_box img-responsive" alt="Responsive image">
				</a>
			</div>
		</div>
	</form>

	<div class="row">
		<div class="col-xs-3 col-xs-offset-2">
			<a href="index.php?page=cellar">
			<img src="images/icon_cellar" class="img-responsive" alt="Responsive image">
			</a>
		</div>
		<div class="col-xs-7">
			<a href="index.php?page=cellar">
			<h1>My Cellar</h1>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-3 col-xs-offset-2">
			<a href="index.php?page=reviews">
			<img src="images/icon_reviews" class="img-responsive" alt="Responsive image">
			</a>
		</div>
		<div class="col-xs-7">
			<a href="index.php?page=cellar">
			<h1>Reviews</h1>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-3 col-xs-offset-2">
			<a href="index.php?page=nearby">
			<img src="images/icon_nearby" class="img-responsive" alt="Responsive image">
			</a>
		</div>
		<div class="col-xs-7">
			<a href="index.php?page=cellar">
			<h1>Nearby</h1>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-4 col-xs-offset-4 yellow_line"></div>
	</div>

</div>