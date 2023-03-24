<?php
header("Content-Type:application/json");

if (isset($_GET['id']) && $_GET['id']!="") {
	$conn = new mysqli('localhost', 'root', '', 'codeigniter1');
	$id = $_GET['id'];
	
	$query = "SELECT * FROM `student` WHERE id=$id";
    $result = $conn->query($query);


	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_array($result);
		$name = $row['name'];
		$email = $row['email'];
		$course = $row['course'];
		response($id, $name, $email,$course);
	// mysqli_close($conn);
	}else{
		response(NULL, NULL, 200,"No Record Found");
	}

}else{
	response(NULL, NULL, 400,"Invalid Request");
	}

function response($id,$name,$email,$course){
	$response['id'] = $id;
	$response['name'] = $name;
	$response['email'] = $email;
	$response['course'] = $course;
	
	$json_response = json_encode($response);
	echo $json_response;
}
?>
