<?php

$servername = "localhost:3308";
$username = "root";
$password = "";




// Create connection
$conn = new mysqli($servername, $username, $password, "medbk");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$name=$_REQUEST['name'];
$dob=$_REQUEST['dob'];
$gender=$_REQUEST['gender'];
$service=$_REQUEST['service'];
$general=$_REQUEST['general'];



$sql = "INSERT INTO tbl_patient (Name, DOB, Comment)
VALUES ('".$name."', '".$dob."', '".$general."')";

$conn->query($sql);


 $last_id = $conn->insert_id;

$sql2 = "INSERT INTO tbl_gender (Patient_ID, Gender)
VALUES (".$last_id." ,'".$gender."')";

$conn->query($sql2);



$sql3 = "INSERT INTO tbl_service (Patient_ID, Service)
VALUES (".$last_id." ,'".$service."')";

$conn->query($sql3);



$sql4 = "SELECT *,P.Patient_ID AS Patient_ID, G.Gender AS Gender, S.Service AS Service  FROM tbl_patient P
LEFT JOIN tbl_gender G ON P.Patient_ID = G.Patient_ID
LEFT JOIN tbl_service S ON G.Patient_ID= S.Patient_ID
ORDER BY P.Patient_ID ASC
";

$result = $conn->query($sql4);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     echo '<tr>';

     echo '<td>';
	 echo $row['Name'];
	 echo '</td>';	
	 
	echo '<td>';
	 echo $row['DOB'];
	 echo '</td>';	

		echo '<td>';
	 echo $row['Gender'];
	 echo '</td>';
	 
	 echo '<td>';
	 echo $row['Service'];
	 echo '</td>';
	
		 echo '<td>';
	 echo $row['Comment'];
	 echo '</td>';

      echo '</tr>';
  }
} else {
  echo "0 results";
}


//$conn->close();


?>