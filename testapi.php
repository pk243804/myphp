<form action="" method="POST">
	<label>Enter ID:</label><br />
	<input type="text" name="id" placeholder="Enter ID" required/>
	<br /><br />
	<button type="submit" name="submit">Submit</button>
</form>




<?php
if (isset($_POST['id']) && $_POST['id']!="") {
	$id = $_POST['id'];
	$url = "http://localhost/myphp/api.php?id=".$id;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	
	echo "<table>";
	echo "<tr><td> ID:</td><td>$result->id</td></tr>";
	echo "<tr><td>Name:</td><td>$result->name</td></tr>";
	echo "<tr><td>Email:</td><td>$result->email</td></tr>";
	echo "<tr><td>Course:</td><td>$result->course</td></tr>";
	echo "</table>";
}
?>