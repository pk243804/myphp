<?php
$conn = new mysqli('localhost', 'root', '', 'codeigniter1');



	$id=$_POST['id'];

	if($id==0){
		echo "<option>Select Mohalla</option>";
	}else{
		$sql = "SELECT * FROM mohalla WHERE city_id=".$id;
		$result = $conn->query($sql);
		while($row = mysqli_fetch_array($result)){
			echo '<option value="'.$row['mohalla_id'].'">'.$row['mohalla_name'].'</option>';
		}
	}

?>