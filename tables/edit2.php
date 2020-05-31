<?php

	require_once('dbconfig.php');
	global $con;
	$Name = $_POST;

	if(empty($id))
	{
		?><div class="text-center">no records found under this selection <a href="#" onclick="$('#link-add').hide();$('#show-add').show(700);">Hide this</a></div>
		<?php
		die();
	}

	$query = "SELECT * FROM sortingalgo where Name='$Name'";
	if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	while($row = mysqli_fetch_assoc($result))
	{
		$i=1;
                                while($i<$f) {
                                    echo '
                                         <div class="form-group col-md-3">
                                        <input type="text" name='.$array[$i].' id='.$array[$i].'  value='.$row[$array[$i]].' placeholder='.$array[$i].' class="form-control"  />';
                                        $i++;
                                         echo '</div>';
                                     }
                                 ?>
                                
		
			<div class="form-group col-md-3">
			<button type="button" class="btn btn-primary update" id="<?php echo $row['Name']; ?>" name="update">Update Record</button>
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