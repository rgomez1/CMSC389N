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
		</header>
	    <div id="content">
	        <div id="sidebar">
				<p>			
					<strong>Category: </strong><br />
					<select name="categories[]" multiple="multiple">
						<option value="Convertible">Convertible</option>
						<option value="Coupe">Coupe</option>
						<option value="Sedan">Sedan</option>
						<option value="Hatchback / Wagon">Hatchback / Wagon</option>
						<option value="SUV">SUV</option>
						<option value="Pickup Truck">Pickup Truck</option>
						<option value="Van">Van</option>
					</select>	
				</p>
				<p>			
					<strong>Size: </strong><br />
					<select name="sizes[]" multiple="multiple">
						<option value="Compact">Compact</option>
						<option value="Midsize">Midsize</option>
						<option value="Full size">Full size</option>
					</select>	
				</p>
				<p>			
					<strong>Maximum MSRP: </strong>
					<output id="MSRPout" for="msrp">$0</output><br />
					<input type="range" id="msrp" name="msrp" min="0" max="250000" value="0" oninput="updateMSRPout()">	
				</p>
				<p>			
					<strong>Minimum MPG: </strong>
					<output id="MPGout" for="mpg">0 MPG</output><br />
					<input type="range" id="mpg" name="mpg" min="0" max="500" value="0" oninput="updateMPGout()">	
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
	        </div>
	        <div id="main">
	            <h2>Main</h2>
	        </div>
	    </div>
	    <footer>
	        <!-- Maybe a link to an about page -->
	    </footer>
    </body>
</html>