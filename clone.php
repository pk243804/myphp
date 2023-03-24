<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>


<form method="post" action="" >
<table border="0" width="100%" class="table">
    <tbody>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Action</th>
        </tr>
        <tr>
        <td>
            <input type="text" id="name1" name="name[]" />
        </td>
        <td>
            <input type="text" id="designation1"name="designation[]" />
        </td>
        <td></td>
        </tr>
    </tbody>
</table>
<button class="add_more">Add More</button>
      
</form>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$(document).ready(function() {

    $('.add_more').click(function(e){
        e.preventDefault();
        $('#employee_table tr:last td:last-child').html("");
        $('.table').append('<tr><td><input type="text" name="name[]" /></td>                              <td><input type="text" name="designation[]" /></td>                                           <td><button class="remove">Remove</button></td></tr>'); 
    
    }); 

    $('.table').on("click",".remove", function(e){ 
        e.preventDefault(); 
        $(this).parent().parent().remove(); 
        $('.table tr:last td:last-child').html('<button class="remove">Remove</button></td>');
        
    });

});
</script>


</body>
</html>