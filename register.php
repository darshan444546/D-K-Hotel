
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')


$servername="localhost";
	$username="root";
	$password="";
	$dbname="d-&-k hotel";

	//connection
		$conn=new mysqli($servername,$username,$password,$dbname);

		//check connection
		if ($conn->connect_error) 
	{
		die("connection failed:".$conn->connect_error);
	}
	else
	{	
	echo "connection succesfull<br>";
	}


	$name=isset($_POST['Name']);	
	$Mobile_Number=isset($_POST['Mobile_Number']);	

	if(isset($_POST['Room_Type'])){
$Room_Type=$_POST['Room_Type'];
$sql2="insert into register2(Room_Type) values('$Room_Type')";
}
	$Room_Type=isset($_POST['Room_Type']);
	$Number_of_rooms=isset($_POST['Number_of_rooms']);	
	$Number_of_Guests=isset($_POST['Number_of_Guests']);
	$Arrival_Date_and_Time=isset($_POST['Arrival_Date_&_Time']);
	$Departure_Date=isset($_POST['Departure_Date']);
	



	$sql="INSERT INTO register2 VALUES ('$name','$Mobile_Number','$Room_Type','$Number_of_Guests','$Number_of_rooms','$Arrival_Date_and_Time','$Departure_Date')";
	
	if ($conn->query($sql) === TRUE) {
		echo "ADDED: ".'<br>'.$name.'<br>'.$Mobile_Number.'<br>'.$Room_Type.'<br>'.$Number_of_rooms.'<br>'.$Number_of_Guests.'<br>'.$Arrival_Date_and_Time.'<br>'.$Departure_Date;
		} else 
		{
			echo "Error: ";
		}

	
		
	if (mysqli_query($conn,$sql))
	 {
		echo "<br>data stored succesfully";
	}
	else
	 {
		echo "error is generated";
	}

	mysqli_close($conn);

  ?>