<?php

	require_once('dbconfig.php');
	global $con;
	$id = $_POST['id'];
	$name = $_POST['name'];
	$abbrivation = $_POST['abbrivation'];
	$inventor = $_POST['inventor'];
	$place = $_POST['place'];

	$jname = $_POST['jname'];
	$ifactor = $_POST['ifactor'];
	$concept = $_POST['concept'];
	$base = $_POST['base'];

	$exploration = $_POST['exploration'];
	$exploitation = $_POST['exploitation'];
	$search = $_POST['search'];
	$type = $_POST['type'];

	$nop = $_POST['nop'];
	$nors = $_POST['nors'];
	$pop_select = $_POST['pop_select'];
	$ntech = $_POST['ntech'];

	$testproblems = $_POST['testproblems'];
	$app_function = $_POST['app_function'];
	$std_problem = $_POST['std_problem'];
	$source = $_POST['source'];

	$language = $_POST['language'];
	$code_exp = $_POST['code_exp'];
	$flow = $_POST['flow'];
	$performance = $_POST['performance'];

	$app = $_POST['app'];
	$scope = $_POST['scope'];
	$eap = $_POST['eap'];
	$comparison = $_POST['comparison'];


	if(!empty($name) && !empty($place) && !empty($inventor) && !empty($id))
	{
		$query = "UPDATE algo  SET 
					algo_name='$name', abbrivation='$abbrivation', inventor='$inventor', university='$place', 
					j_name='$jname', i_factor='$ifactor', c_inspired='$concept', base='$base', 
					exp_operator='$exploration', exploitation='$exploitation', search='$search', a_type='$type' , 
					nop='$nop', nors='$nors', population_selection='$pop_select', niching_tech='$ntech', 
					testproblem='$testproblems', app_function='$app_function', std_problem='$std_problem', 
					source='$source', language='$language', code_exp='$code_exp', flow_available='$flow', performance='$performance', application='$app', scope='$scope', performance_ea='$eap', comparison='$comparison' WHERE id='$id'";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo '<div class="col-md-offset-4 col-md-5 text-center alert alert-success">1 Record updated!</div>';
	}
	else
	{
		echo '<div class="col-md-offset-4 col-md-5 text-center alert alert-danger">error while updating record</div>';
	}