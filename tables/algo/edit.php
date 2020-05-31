<?php

	require_once('dbconfig.php');
	global $con;
	$id = $_POST['id'];

	if(empty($id))
	{
		?><div class="text-center">no records found under this selection <a href="#" onclick="$('#link-add').hide();$('#show-add').show(700);">Hide this</a></div>
		<?php
		die();
	}

	$query = "SELECT * FROM algo where id='$id'";
	if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	while($row = mysqli_fetch_assoc($result))
	{
		?>
		<div class="form-inline" id="edit-data">
			<div class="form-group col-md-3">
                        <input type="text" name="name" id="name" value="<?php echo $row['algo_name']; ?>" placeholder="Name of algorithm" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="abbrivation" id="abbrivation" value="<?php echo $row['abbrivation']; ?>" placeholder="Abbrivation/Shortening" class="form-control" required/>
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" id="inventor" name="inventor" value="<?php echo $row['inventor']; ?>" placeholder="Inventor/author" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="place" id="place" value="<?php echo $row['university']; ?>" placeholder="University / college /affiliation Country" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="jname" id="jname" value="<?php echo $row['j_name']; ?>" placeholder="Journal_name" class="form-control" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" id="ifactor" name="ifactor" value="<?php echo $row['i_factor']; ?>" placeholder="impact_factor" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="concept" id="concept" value="<?php echo $row['c_inspired']; ?>" placeholder="Concept_inspired" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="base" id="base" value="<?php echo $row['base']; ?>" placeholder="Based" class="form-control" required/>
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" id="exploration" name="exploration" value="<?php echo $row['exp_operator']; ?>" placeholder="Exploration_operator" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="exploitation" id="exploitation" value="<?php echo $row['exploitation']; ?>" placeholder="Exploitation_operator" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="search" id="search" value="<?php echo $row['search']; ?>" placeholder="Search" class="form-control" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" id="type" name="type" value="<?php echo $row['a_type']; ?>" placeholder="Is it Metaheurstic or Heuristic?" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="nop" id="nop" value="<?php echo $row['nop']; ?>" placeholder="NoOfPrameters" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="nors" id="nors" value="<?php echo $row['nors']; ?>" placeholder="No of Random Steps" class="form-control" required/>
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="pop_select" id="pop_select" value="<?php echo $row['population_selection']; ?>" placeholder="Population_selection" class="form-control" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="ntech" id="ntech" value="<?php echo $row['niching_tech']; ?>" placeholder="Niching technique" class="form-control" required />
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" name="testproblems" value="<?php echo $row['testproblem']; ?>" id="testproblems" placeholder="Tested on Testproblems" class="form-control" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" id="app_function" name="app_function" value="<?php echo $row['app_function']; ?>" placeholder="EA_Appiled function/application" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" id="std_problem" name="std_problem" value="<?php echo $row['std_problem']; ?>" placeholder="EA_standard_problem" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="source" id="source" value="<?php echo $row['source']; ?>" placeholder="Whether_code_available online /book" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="language" id="language" value="<?php echo $row['language']; ?>" placeholder="Lang_of_code" class="form-control" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" id="code_exp" name="code_exp" value="<?php echo $row['code_exp']; ?>" placeholder="Whether_CEC_Std_functions_Code_Experimented" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="flow" id="flow" value="<?php echo $row['flow_available']; ?>" placeholder="Flowchart /algorithm/pseudo availale	" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="performance" id="performance" value="<?php echo $row['performance']; ?>" placeholder="Performance parameter" class="form-control" required/>
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" id="app" name="app" value="<?php echo $row['application']; ?>" placeholder="Application" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="scope" id="scope" value="<?php echo $row['scope']; ?>" placeholder="Futuescope/research Scope" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" id="eap" name="eap" value="<?php echo $row['performance_ea']; ?>" placeholder="Performance EA	" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="comparison" id="comparison" value="<?php echo $row['comparison']; ?>" placeholder="NamComparison_with_otherAlgoe" class="form-control" required />
                    </div>
			<div class="form-group col-md-3">
			<button type="button" class="btn btn-primary update" id="<?php echo $row['id']; ?>" name="update">Update Record</button>
			<button type="button" href="javascript:void(0);" class="btn btn-default" id="cancel" name="add" onclick="$('#link-add').slideUp(400);$('#show-add').show(700);">Cancel</button>
		</div>
	<?php
	}
	?>

<script type="text/javascript">
	$('.update').click(function() {
		var id = $(this).attr('id');
        var name = $('#name').val();
        var abbrivation = $('#abbrivation').val();
        var inventor = $('#inventor').val();
        var place = $('#place').val();

        var jname = $('#jname').val();
        var ifactor = $('#ifactor').val();
        var concept = $('#concept').val();
        var base = $('#base').val();

        var exploration = $('#exploration').val();
        var exploitation = $('#exploitation').val();
        var search = $('#search').val();
        var type = $('#type').val();

        var nop = $('#nop').val();
        var nors = $('#nors').val();
        var pop_select = $('#pop_select').val();
        var ntech = $('#ntech').val();

        var testproblems = $('#testproblems').val();
        var app_function = $('#app_function').val();
        var std_problem = $('#std_problem').val();
        var source = $('#source').val();

        var language = $('#language').val();
        var code_exp = $('#code_exp').val();
        var flow = $('#flow').val();
        var performance = $('#performance').val();

        var app = $('#app').val();
        var scope = $('#scope').val();
        var eap = $('#eap').val();
        var comparison = $('#comparison').val();

        $.ajax({
            url: "update.php",
            type: "POST",
            data: { id: id,  name: name, abbrivation: abbrivation, inventor: inventor, place: place,
                    jname: jname, ifactor: ifactor, concept: concept, base: base,
                    exploration: exploration, exploitation: exploitation, search: search, type: type,
                    nop: nop, nors: nors, pop_select: pop_select, ntech: ntech,
                    testproblems: testproblems, app_function: app_function, std_problem: std_problem, source: source,
                    language: language, code_exp: code_exp, flow: flow, performance: performance,
                    app: app, scope: scope, eap: eap, comparison: comparison  },
            success: function(data, status, xhr) {
                $('#name').val('');
                $('#abbrivation').val('');
                $('#inventor').val('');
                $('#place').val('');

                $('#jname').val('');
                $('#ifactor').val('');
                $('#concept').val('');
                $('#base').val('');

                $('#exploration').val('');
                $('#exploitation').val('');
                $('#search').val('');
                $('#type').val('');

                $('#nop').val('');
                $('#nors').val('');
                $('#pop_select').val('');
                $('#ntech').val('');

                $('#testproblems').val('');
                $('#app_function').val('');
                $('#std_problem').val('');
                $('#source').val('');

                $('#language').val('');
                $('#code_exp').val('');
                $('#flow').val('');
                $('#performance').val('');

                $('#app').val('');
                $('#scope').val('');
                $('#eap').val('');
                $('#comparison').val('');	
                $('#records_content').fadeOut(1100).html(data);
                $.get("view1.php", function(html) {
                    $("#table_content").html(html);
                });
                $('#records_content').fadeOut(11000).html(data);
            },
            complete: function() {
                $('#link-add').hide();
                $('#show-add').show(700);
            }
        });
    }); // update close
</script>