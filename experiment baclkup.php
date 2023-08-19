", ".$Mobile_Number.",".$Room_Type.", ".$Number_of_rooms.",".$Number_of_Guests.",".$Arrival_Date_and_Time.",".$Departure_Date





	$name=isset($_REQUEST['Name']);
	/*$Mobile_Number=isset($_REQUEST['Mobile_Number']);	
	$Room_Type=isset($_REQUEST['Room_Type']);
	$Number_of_rooms=isset($_REQUEST['Number_of_rooms']);	
	$Number_of_Guests=isset($_REQUEST['Number_of_Guests']);
	$Arrival_Date_and_Time=isset($_REQUEST['Arrival_Date_&_Time']);
	$Departure_Date=isset($_REQUEST['Departure_Date']);*/
	


	/*$sql="INSERT INTO register2 VALUES('$name','Mobile_Number','$Room_Type','$Number_of_rooms','$Number_of_Guests','$Arrival_Date_and_Time','$Departure_Date')";*/

	$sql="INSERT INTO register2 VALUES('$name');
	if ($conn->query($sql) === TRUE) {
		echo $name;
		} else 
		{
			echo "Error: ".$sql."<br>".$conn->error;
		}

	
