<!DOCTYPE html>
<html>
<?php 

	require_once('dbconfig.php');
	global $con;
	//global $array;
	$i=0;
  $query = "SELECT * FROM sortingalgo ";
	 $result = mysqli_query($con, $query);
	if($result === false)
	{
		echo mysqli_error($con);
	}	
		
		
	while($i<mysqli_num_fields($result)) 
    { 
      $meta=mysqli_fetch_field($result); 
	  $array[$i]=$meta->name;
     // echo $meta->name."<br />"; 
      $i++; 
    }
	
	$f=$i;

	
	?>

<head>
    <title>Sorting</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
         
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
           
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	
</head>

<body>
   
       
    <div class="container" style="padding-top: 15px;">
       
        <table id="data" class="table table-bordered">
	 <thead> 
		<tr class="info">
						 <?php
							$i=0;
							while($i<$f) {
						
			
									if($array[$i]=='Average'){
										echo '<th><a href="./Complexcity.php">'.$array[$i].'</a></th>';
									}
									elseif($array[$i]=='Memory'){
										echo '<th><a href="./pie.php">'.$array[$i].'</a></th>';
									}
									elseif ($array[$i]=='Stable') {
										echo '<th><a href="./stablepie.php">'.$array[$i].'</a></th>';
									}
									else{
									echo '<th>'.$array[$i].'</th>';
								    }
								

							
		
								$i++;
							}
							?>
					<th>Action</th>
		  </tr>
	</thead> 
	 <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                              $i=0;
								echo ' <tr>';
								while($i<$f) {
								echo '
								<td>'.$row[$array[$i]].'</td>';
								$i++;
										}
								echo '<td><button id="'.$row[$array[0]].'" class="edit btn btn-info">Edit</button>';
								echo ' <button class="del btn btn-danger" id='.$row[$array[0]].'>Delete</button></td>';
								echo '</tr>';
							}
                            
                           
										
                         
	
		echo '</table>';
		?>

		</br>
				</br>
		</br>
		 <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <button class="btn btn-success" id="show-add">Add New Record</button>
                </div>
                <div id="link-add" class="form-inline">
                	<form method="POST" action="add.php">
				<?php 
                  // echo ' <div class="form-group col-md-3">';
					
					$i=1;
								while($i<$f) {
									echo '
									     <div class="form-group col-md-3">
										<input type="text" name='.$array[$i].' id='.$array[$i].'  placeholder='.$array[$i].' class="form-control"  />';
										$i++;
										 echo '</div>';
									 }
								
                        	
					  //  echo '</div>';
						?>
                    
				
					

                    <div class="form-group col-md-3">
                        <input type="submit" class="btn btn-primary" value="Add Record"/>
                     
                        <button type="button" href="javascript:void(0);" class="btn btn-default" id="cancel" name="add" onclick="$('#link-add').slideUp(400);$('#show-add').show(600);">Cancel</button>
                          </form>
                    </div>
                </div>
            </div>
       
		</br>
		</br>
    </div>
	</div>
	<script>
		function add()
		{
			var a = <?php echo json_encode($array); ?>;
			var value = [];
			for(var i = 0; i < a.length; i++)
			{
				value[i-1] = document.getElementById(a[i]).value
			}

			console.log(value)
		}
		 $(document).ready(function() {

		$("#data").DataTable();
	});

		$('.del').click(function() {
		var Name = $(this).attr('Name');
		$.ajax({
	    url : "delete2.php",
	    type: "POST",
	    data : { Name: Name },
	    success: function(data)
	    {
	    	$('#records_content').fadeOut(1100).html(data);
	    	$.get("sorting.php", function(data)
	    	{	
	    		$("#table_content").html(data); 
	    	});
	    }
	});
}); // delete close

	$('.edit').click(function() {
		var Name = $(this).attr('Name');
		$('#show-add').hide();
		$.ajax({
	    url : 'edit2.php',
	    type: 'POST',
	    data : { Name: Name },
	    success: function(data)
	    {
    		$("#link-add").html(data);
    		$('#link-add').show();
	    }
	});
}); // edit close

	</script>
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
</body>

</html>
