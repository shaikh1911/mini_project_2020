<?php
	require_once('dbconfig.php');
	global $con;

	$query = $con->prepare("SELECT * FROM algo order by id");
	$query->execute();
	mysqli_stmt_bind_result($query, $id, $name, $abbrivation, $auther, $university, $jname, $ifactor, $concept, $base, $exploration, $exploitation, $search, $type, $nop, $nors, $pop_select, $ntech, $testproblems, $app_function, $std_problem, $source, $language, $code_exp, $flow, $performance, $app, $scope, $eap, $comparison );
	
	?>
	<table id="algo_data" class="table table-bordered resposive">
		 <thead> 
		 	<tr class="info">
			<th>ID</th>
			<th>Name Of Algorithm</th>
			<th>Abbreviation /Shortening</th>
			<th>Inventor/author	</th>
			<th>University / college /affiliation Country</th>

			<th>Journal_name</th>
			<th>Impact_factor</th>
			<th>Concept_inspired</th>
			<th>Based</th>

			<th>Exploration_operator</th>
			<th>Exploitation_operator</th>
			<th>Search</th>
			<th>Is it Metaheurstic or Heuristic?</th>

			<th>No. Of Prameters(Controlling para)</th>
			<th>No of Random Steps</th>
			<th>Population_selection</th>
			<th>Niching technique</th>

			<th>Tested on Testproblems</th>
			<th>EA_Appiled function/application	</th>
			<th>EA_standard_problem	</th>
			<th>Whether_code_available online /book	</th>

			<th>Lang_of_code</th>
			<th>Whether_CEC_Std_functions_Code_Experimented</th>
			<th>Flowchart /algorithm/pseudo availale</th>
			<th>Performancepara	</th>

			<th>Application</th>
			<th>Futuescope/research Scope</th>
			<th>Performance EA</th>
			<th>Comparison_with_otherAlgo</th>

			<th>Action</th>
		</tr>
	</thead>
	<?php

	while(mysqli_stmt_fetch($query))
	{
		echo '
		<tr>
			<td>'.$id.'</td>

			<td>'.$name.'</td>
			<td>'.$abbrivation.'</td>
			<td>'.$auther.'</td>
			<td>'.$university.'</td>

			<td>'.$jname.'</td>
			<td>'.$ifactor.'</td>
			<td>'.$concept.'</td>
			<td>'.$base.'</td>

			<td>'.$exploration.'</td>
			<td>'.$exploitation.'</td>
			<td>'.$search.'</td>
			<td>'.$type.'</td>

			<td>'.$nop.'</td>
			<td>'.$nors.'</td>
			<td>'.$pop_select.'</td>
			<td>'.$ntech.'</td>

			<td>'.$testproblems.'</td>
			<td>'.$app_function.'</td>
			<td>'.$std_problem.'</td>
			<td>'.$source.'</td>

			<td>'.$language.'</td>
			<td>'.$code_exp.'</td>
			<td>'.$flow.'</td>
			<td>'.$performance.'</td>

			<td>'.$app.'</td>
			<td>'.$scope.'</td>
			<td>'.$eap.'</td>
			<td>'.$comparison.'</td>
			<td><button id="'.$id.'" class="edit btn btn-info">Edit</button> <button class="del btn btn-danger" id="'.$id.'">Delete</button></td>
		</tr>';
	}
		echo '</table>';
	
?>
<script type="text/javascript">
	    $(document).ready(function() {

		$("#algo_data").DataTable();
	});

		$('.del').click(function() {
		var id = $(this).attr('id');
		$.ajax({
	    url : "delete.php",
	    type: "POST",
	    data : { id: id },
	    success: function(data)
	    {
	    	$('#records_content').fadeOut(1100).html(data);
	    	$.get("view1.php", function(data)
	    	{	
	    		$("#table_content").html(data); 
	    	});
	    }
	});
}); // delete close

	$('.edit').click(function() {
		var id = $(this).attr('id');
		$('#show-add').hide();
		$.ajax({
	    url : 'edit.php',
	    type: 'POST',
	    data : { id: id },
	    success: function(data)
	    {
    		$("#link-add").html(data);
    		$('#link-add').show();
	    }
	});
}); // edit close

</script>