<!DOCTYPE html>
<html>


<head>
    <title>algo</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
			<script type="text/javascript" language="javascript" src="../jquery.jeditable.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	
</head>

<body>
   
       
   <!--  <div class="container" style="padding-top: 15px;">
       
        <div  class="row">
            <div class="col-md-12">
                <div id="records_content"></div>
                <br>
                <div style="overflow-x:auto;" class="col-md-offset-1 col-md-10" id="table_content">
				
				<br>
                </div>
            </div>
        </div> -->
		</br>
		</br>
		 <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <button class="btn btn-success" id="show-add">Add New Record</button>
                </div>
                <div id="link-add" class="form-inline">

					<div class="form-group col-md-3">
                        <input type="text" name="name" id="name" placeholder="Name of algorithm" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="abbrivation" id="abbrivation" placeholder="Abbrivation/Shortening" class="form-control" required/>
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" id="inventor" name="inventor" placeholder="Inventor/author" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="place" id="place" placeholder="University / college /affiliation Country" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="jname" id="jname" placeholder="Journal_name" class="form-control" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" id="ifactor" name="ifactor" placeholder="impact_factor" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="concept" id="concept" placeholder="Concept_inspired" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="base" id="base" placeholder="Based" class="form-control" required/>
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" id="exploration" name="exploration" placeholder="Exploration_operator" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="exploitation" id="exploitation" placeholder="Exploitation_operator" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="search" id="search" placeholder="Search" class="form-control" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" id="type" name="type" placeholder="Is it Metaheurstic or Heuristic?" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="nop" id="nop" placeholder="NoOfPrameters" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="nors" id="nors" placeholder="No of Random Steps" class="form-control" required/>
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="pop_select" id="pop_select" placeholder="Population_selection" class="form-control" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="ntech" id="ntech" placeholder="Niching technique" class="form-control" required />
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" name="testproblems" id="testproblems" placeholder="Tested on Testproblems" class="form-control" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" id="app_function" name="app_function" placeholder="EA_Appiled function/application" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" id="std_problem" name="std_problem" placeholder="EA_standard_problem" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="source" id="source" placeholder="Whether_code_available online /book" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="language" id="language" placeholder="Lang_of_code" class="form-control" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" id="code_exp" name="code_exp" placeholder="Whether_CEC_Std_functions_Code_Experimented" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" name="flow" id="flow" placeholder="Flowchart /algorithm/pseudo availale	" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="performance" id="performance" placeholder="Performance parameter" class="form-control" required/>
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" id="app" name="app" placeholder="Application" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="scope" id="scope" placeholder="Futuescope/research Scope" class="form-control" required />
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" id="eap" name="eap" placeholder="Performance EA	" class="form-control" required />
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="comparison" id="comparison" placeholder="NamComparison_with_otherAlgoe" class="form-control" required />
                    </div>
                    
				
					

                    <div class="form-group col-md-3">
                        <button type="button" class="btn btn-primary" id="add" name="add">Add Record</button>
                        <button type="button" href="javascript:void(0);" class="btn btn-default" id="cancel" name="add" onclick="$('#link-add').slideUp(400);$('#show-add').show(600);">Cancel</button>
                    </div>
                </div>
            </div>
    </div>
    <!-- <div class="row">
            <div class="col-md-12">
                <div id="records_content"></div>
                <br>
                <div style="overflow-x:auto;" class="col-md-offset-1 col-md-10" id="table_content">
                </div>
            </div>
        </div>
	</div> -->
    <div class="container" style="padding-top: 15px;">
       
        <div  class="row">
            <div class="col-md-12">
                <div id="records_content"></div>
                <br>
                <div style="overflow-x:auto;" class="col-md-offset-1 col-md-10" id="table_content">
                
                <br>
                </div>
            </div>
        </div>
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
</body>

</html>
