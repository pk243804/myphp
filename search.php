<?php
$conn = new mysqli('localhost', 'root', '', 'codeigniter1');
$return = '';



	if(isset($_POST["query"]))
	{
		$search = $_POST["query"];
		$query = "SELECT * FROM student
		WHERE id  LIKE '%".$search."%'
		OR name LIKE '%".$search."%' 
		OR email LIKE '%".$search."%' 
		OR course LIKE '%".$search."%' 
		";}
	else
	{
		$query = "SELECT * FROM student";
	}


$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$return .='
	<div class="table-responsive">
	<table class="table table bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Course</th>
	</tr>';
	while($row1 = mysqli_fetch_array($result))
	{
		$return .= '
		<tr>
		<td>'.$row1["id"].'</td>
		<td>'.$row1["name"].'</td>
		<td>'.$row1["email"].'</td>
		<td>'.$row1["course"].'</td>
		</tr>';
	}
	echo $return;
	}
else
{
	echo 'No results containing all your search terms were found.';
}
?>