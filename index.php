<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
	<h1>Registration Form</h1>
	<div class="container">
       <form method="post" action="" id="myform">
       		<div class="form-group">
            	<label for="name">Name</label>
				<input type="text" name="name" id="name" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" required>
			</div>
			<div class="form-group">
				<label for="date_of_birth">D.O.B</label>
				<input type="date" name="date_of_birth" id="date_of_birth" required>
			</div>
			<div class="form-group">
				<label for="username">User_Name</label>
				<input type="username" name="username" id="username" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required>
			</div>
			<div class="form-group">
				<!-- <input type="submit" name="" value="abcd"> -->
                <input type="button" class="button" value="Ajax test" name="showResult" id="showResult">
                <input type="button" class="button" value="Show Data" onclick="getAllData();">
            </div>
            <script>
            	

					  
					  
			</script>



		</form>
		<div class= "alert alert-info" id="table_content">
			<h2> Manage User</h2>
			<table border='5' style="width: 1000px;">
				<thead>
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>DATE_OF_BIRTH</th>
					<th>USERNAME</th>
					<th>PASSWORD</th>
				</thead>
				<tbody id="table_show">
				 
				</tbody>
			</table>
		</div>
	<script>
    	// $(document).ready(function(){	
    		/* Display data*/

    		function getAllData()
    		{
    			$.ajax({
    				type: "GET",
        			url: "getAllData2.php",             
        			dataType: "html",                  
        			success: function(data){                    
            		$("#table_show").html(data); 
    				}
    			})

    			 // $.get("getAllData.php", function(data, status){
				 //    manageUser(data)
				 //  });
    			
    		}

    		function manageUser(record){
    			var data = "";
    			$.each(record, function(key,value){
    				data += "<tr>";
    				data += "<td>"+value.id+"</td>";
    				data += "<td>"+value.name+"</td>";
    				data += "<td>"+value.email+"</td>";
    				data += "<td>"+value.date_of_birth+"</td>";
    				data += "<td>"+value.username+"</td>";
    				data += "<td>"+value.password+"</td>";
    				data += "<tr>";

					});

    				$("#table_show").html(data);
				}


    		/*Insert Data*/
    		$("#showResult").click(function(){

    			$.ajax({
    				url: "response.php",
    				method: "POST",
    				data: $("#myform").serialize(),
    				success: function(res){
    					alert(res);
    					$("#name").val("");
    					$("#email").val("");
    					$("#date_of_birth").val("");
    					$("#username").val("");
						$("#password").val("");
    					
    					getAllData();

    				}
    			})
    		})
    	// })

    </script>
	
</html>




