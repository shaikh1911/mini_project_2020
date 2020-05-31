<!--  -->


	<?php

	require_once('dbconfig.php');
	global $con;

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
if(!empty($name) && !empty($inventor) && !empty($place))
	{
$query = "INSERT INTO algo VALUES(null,'$name','$abbrivation','$inventor','$place',
								'$jname','$ifactor','$concept','$base','$exploration','$exploitation','$search','$type',
								'$nop','$nors','$pop_select','$ntech','$testproblems','$app_function','$std_problem','$source',
								'$language','$code_exp','$flow','$performance','$app','$scope','$eap','$comparison')";
$con->query($query) or die($query.'<br />'.$con->error);
echo '<div class="col-md-offset-4 col-md-5 text-center alert alert-success">1 Record Added!</div>';

}
else{
	echo '<div class="col-md-offset-4 col-md-5 text-center alert ">Atleast Name,inventor and Univercity IS Required!</div>';

}
	// if(!empty($name) && !empty($inventor) && !empty($place))
	// {
	// 	$query = $con->prepare("INSERT into algo (algo_name, abbrivation, inventor, university, j_name, i_factor, c_inspired, base, exp_operator, expoitation, search, a_type, nop, nors, population_selection, niching_tech, testproblem, niching_tech, testproblem, app_fuction, std_problem, source, language, code_exp, flow_available, performance, application, scope, performance_ea, comparison) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

	// 	$query->bind_param("ssssssssssssssssssssssssssss",$name,$abbrivation,$inventor,$place,
	// 							$jname,$ifactor,$concept,$base,$exploration,$exploitation,$search,$type,
	// 							$nop,$nors,$pop_select,$ntech,$testproblems,$app_function,$std_problem,$source,
	// 							$language,$code_exp,$flow,$performance,$app,$scope,$eap,$comparison);

	// 	$result = $query->execute();
	// if($result) 
	// 	{
	//         echo '<div class="col-md-offset-4 col-md-5 text-center alert alert-success">1 Record Added!</div>';
	//     }
	//     else
	//     	exit(mysqli_error($con)); 
	// }
