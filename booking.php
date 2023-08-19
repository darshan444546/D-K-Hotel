
<html>
<head>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="D and K hotel.css">
</head>
<body>
<div class="row" id="heading-secsion">
			<div class="col-lg-3" id="head_tags"><h1>D & K hotel</h1></div>
			<div class="col-lg-8" id="head_tags">
				<ul id="head-menu-list">
					<li><h3>Home</h3></li>
					<li><a href="rooms.html"><h3>Rooms</h3></a></li>
					<li><h3>About us</h3></li>
					<li><h3>Contact</h3></li>
					<li><button id="BOOK-NOW">BOOK NOW</button></li>
				</ul>
			</div>
		</div>	


		
	<center>		
	<div id="form_div">
	
	<form action="register.php" method="post" id="register_form">
		<div class="row">
			<div class="col-lg-5">Name</div>
			<div class="col-lg-15"><input type="varchar" name="Name" value="darshan"></div>
		</div>
		<div class="row" >
				<div class="col-lg-5">Mobile Number</label></div>
				<div class="col-lg-15"><input type="Number" name="Mobile_Number" ></div>
		</div>
		<div class="row" >
				<div class="col-lg-5"><label>Room Type</label></div>
				<div class="col-lg-15">  					
					    <select name="Room_Type" id="Room_Type"> 
					        <option value="Standard Room">Standard Room( 1 To 4 People)</option> 
					        <option value="Family Room"> Family room( 1 To 4 People)</option> 
					        <option value="Privet Room">Privet Room( 1 To 4 People)</option> 
						</select>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-5"><label>Number of Rooms</label></div>
				<div class="col-lg-15"><input type="Number" name="Number_of_rooms"></div>
		</div>	
		<div class="row">
				<div class="col-lg-5"><label>Number of Guest</div>
				<div class="col-lg-15"><input type="Number" name="Number_of_Guests"></div>
		</div>	
		<div class="row" >
				<div class="col-lg-5"><label>Arrival Date & Time</div>
				<div class="col-lg-15"><input type="datetime-local" name="Arrival_Date_&_Time">
				</div>
		</div>
			<div class="row" >
					<div class="col-lg-5"><label>Departure Date</label> </div>
					<div class="col-lg-15"><input type="datetime-local" name="Departure_Date"></div>
			</div>		

			
		

				<div id="book"><input type="submit" value="Book" id="book_button" >					</div>
			
			
			
	</form>

	</div>
	</center>
</body>
</html>