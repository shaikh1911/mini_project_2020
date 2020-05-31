<?php 
include "config.php";


// Insert record
if(isset($_POST['submit'])){
		
		$title = $_POST['title'];
		$title= mysqli_real_escape_string($con , $title);
		$short_desc = $_POST['short_desc'];
		$short_desc = mysqli_real_escape_string($con , $short_desc);

		$long_desc = $_POST['long_desc'];
		$long_desc = mysqli_real_escape_string($con , $long_desc);

		


		if($title != ''){
			
			mysqli_query($con, "INSERT INTO contents(title,short_desc,long_desc) VALUES('".$title."','".$short_desc."','".$long_desc."') ");
			header('location: ../home.php');
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD YOUR CONTENT</title>

	<!-- CSS -->
	<style type="text/css">
	.cke_textarea_inline{
		border: 1px solid black;
	}
	</style>

	<!-- CKEditor -->	
	<script src="ckeditor/ckeditor.js" ></script>
</head>
<body>

	<form method='post' action=''>
		Title : 
		<input type="text" name="title" ><br>

		Short Description: 
		<textarea id='short_desc' name='short_desc' style='border: 1px solid black;'  ></textarea><br>

		Long Description: 
		<textarea id='long_desc' name='long_desc' ></textarea><br>

		<input type="submit" name="submit" value="Submit for review">
	</form>
	
	<!-- Script -->
	<script type="text/javascript">
	
		// Initialize CKEditor
		CKEDITOR.inline( 'short_desc');

		CKEDITOR.replace('long_desc',{

			width: "1000px",
        	height: "300px"
   
		}); 
	
    	
	</script>
</body>
</html>