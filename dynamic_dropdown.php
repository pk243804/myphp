<?php $conn = new mysqli('localhost', 'root', '', 'codeigniter1');
	$sql = "SELECT * FROM country";
	$result = $conn->query($sql);
?>
<html>
<head>
<title>Dynamic Dependent Select Box using jQuery and Ajax</title>
</head>
<body>

	
		<label>Country :</label>
		<select name="country" class="country">
			<option value="0">Select Country</option>
			<?php
			while($row=mysqli_fetch_array($result)){
			echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
			} ?>
		</select>

		<br/><br/>
		<label>City :</label>
		<select name="city" class="city">
		    <option>Select City</option>
		</select>

        <br/><br/>
		<label>Mohalla :</label>
		<select name="mohalla" class="mohalla">
		    <option>Select Mohalla</option>
		</select>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$(".country").change(function(){
			var id=$(this).val();
		$.ajax({
			type: "POST",
			url: "ajax.php",
			data: 'id='+id,
			success: function(data){
			$(".city").html(data);
			} 
		});
		});

		$(".city").change(function(){
			var id=$(this).val();
		$.ajax({
			type: "POST",
			url: "ajax2.php",
			data: 'id='+id,
			success: function(data){
			$(".mohalla").html(data);
			} 
		});
		});
	});
</script>


</body>
</html>