<?php
$conn = new mysqli('localhost', 'root', '', 'codeigniter1');

	
	$id=$_POST['id'];

	if($id==0){
		echo "<option>Select City</option>";
	}else{
		$sql = "SELECT * FROM city WHERE country_id=".$id;
		$result = $conn->query($sql);
		while($row = mysqli_fetch_array($result)){
			echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
		}
	}
	


?>