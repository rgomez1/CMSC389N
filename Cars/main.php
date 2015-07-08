<!doctype html>
<html>
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title>Car Finder</title>
        <link rel="stylesheet" href="main.css" type="text/css" /> 
        <script src="main.js"></script>
    </head>

    <body>
    	<header>
    		<h1>Find a Car</h1>
    		<hr>
		</header>
	    <div id="content">
	        <div id="sidebar">
		        <form>
					<p>			
						<strong>Category: </strong><br />
						<select id ="categories" multiple="multiple">
							<option id="Convertible">Convertible</option>
							<option id="Coupe">Coupe</option>
							<option id="Sedan">Sedan</option>
							<option id="Hatchback">Hatchback / Wagon</option>
							<option id="SUV">SUV</option>
							<option id="Pickup Truck">Pickup Truck</option>
							<option id="Van">Van</option>
						</select>	
					</p>
					<p>			
						<strong>Size: </strong><br />
						<select id ="sizes" multiple="multiple">
							<option id="Compact">Compact</option>
							<option id="Midsize">Midsize</option>
							<option id="Fullsize">Fullsize</option>
						</select>	
					</p>
					<p>			
						<strong>Maximum MSRP: </strong>
						<output id="MSRPout" for="msrp">$0</output><br />
						<input class="range" type="range" id="msrp" min="0" max="200000" value="0" oninput="updateMSRPout()">	
					</p>
					<p>			
						<strong>Minimum MPG: </strong>
						<output id="MPGout" for="mpg">0 MPG</output><br />
						<input class="range" type="range" id="mpg" min="0" max="50" value="0" oninput="updateMPGout()">	
					</p>
					<p>			
						<strong>Minimum Safety Rating: </strong><br />
						<span class="rating">
						    <input type="radio" class="rating-input"
						        id="rating-input-1-5" name="rating-input-1">
						    <label for="rating-input-1-5" class="rating-star"></label>
						    <input type="radio" class="rating-input"
						        id="rating-input-1-4" name="rating-input-1">
						    <label for="rating-input-1-4" class="rating-star"></label>
						    <input type="radio" class="rating-input"
						        id="rating-input-1-3" name="rating-input-1">
						    <label for="rating-input-1-3" class="rating-star"></label>
						    <input type="radio" class="rating-input"
						        id="rating-input-1-2" name="rating-input-1">
						    <label for="rating-input-1-2" class="rating-star"></label>
						    <input type="radio" class="rating-input"
						        id="rating-input-1-1" name="rating-input-1">
						    <label for="rating-input-1-1" class="rating-star"></label>
						</span>		
					</p>
					<p>
						<strong>Fuel: </strong><br />
						<select id ="fuel">
							<option id="gas">Gas</option>
							<option id="diesel">Diesel</option>
							<option id="hybrid">Hybrid</option>
							<option id="electric">Electric</option>
						</select>
					</p>
					<br><br>
					<p>
						<input type="reset" value="Reset Filters"/>
						<input type="submit" value="Filter Results"/>
					</p>
				</form>
	        </div>
	        <div id="main">
	            <div id="sortByDiv">
	            	<br>
            		<strong>Sort by: </strong>
					<select id="sortBy">
						<option id="Lowest Price">Lowest Price</option>
						<option id="Highest Price">Highest Price</option>
						<option id="Newest">Newest</option>
						<option id="Oldest">Oldest</option>
						<option id="Safest">Safest</option>
					</select>
					<br>
	        	</div>
	        	<div id="results">
	            	<ul id="resultsList">
	            		This will be filled by updateData()
	            	</ul>
	        	</div>
	        </div>
	    </div>
	    <footer>
	        <!-- Maybe a link to an about page -->
	    </footer>
    </body>
</html>