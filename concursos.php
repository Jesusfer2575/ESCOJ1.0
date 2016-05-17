<?php 
include("./resources/header.php");
?>
<script>
	$("#fechaIni").datepicker({
	    format: "yyyy-mm-dd",
	    autoclose: true,
	    orientation: "auto"
	});
	$("#fechaFin").datepicker({
	    format: "yyyy-mm-dd",
	    autoclose: true,
	    orientation: "auto"
	});
</script>
<body style="color:#424242;">
	<div id="divEspacio" class="rox marg-main" style="margin-top:60px;"></div>
	<div style="color:#337ab7;">
		
			<h1 class="text-center" style="margin-top: 0px;"><strong>Contests</strong></h1>
		
	</div>
	<div class="table-responsive">          
	  <table class="table" style="width:80%;margin-left:10em;">
	    <thead >
	      <tr style="text-align:center;">
	        <th style="width:5%;">ID #</th>
	        <th style="width:5%;">Access</th>
	        <th>Name</th>
	        <th style="width:15%;">Start</th>
	        <th style="width:15%;">End</th>
	      </tr>
	    </thead>
	    <tbody style="text-align:center;">
	      <tr>
	        <td>1</td>
	        <td>Private</td>
	        <td><a href="#">Liga Cubana de Programación 2016 (Etapa V)</a></td>
	        <td>2016-05-28 10:00:00</td>
	        <td>2016-05-28 14:00:00</td>
	      </tr>
	      <tr>
	        <td>2</td>
	        <td>Private</td>
	        <td><a href="#">Liga Cubana de Programación 2016 (Etapa V)</a></td>
	        <td>2016-05-28 10:00:00</td>
	        <td>2016-05-28 14:00:00</td>
	      </tr>
	      <tr>
	        <td>3</td>
	        <td>Public</td>
	        <td><a href="#">Liga Cubana de Programación 2016 (Etapa V)</a></td>
	        <td>2016-05-28 10:00:00</td>
	        <td>2016-05-28 14:00:00</td>
	      </tr>
	      <tr>
	        <td>4</td>
	        <td>Private</td>
	        <td><a href="#">Liga Cubana de Programación 2016 (Etapa V)</a></td>
	        <td>2016-05-28 10:00:00</td>
	        <td>2016-05-28 14:00:00</td>
	      </tr>
	      <tr>
	        <td>5</td>
	        <td>Public</td>
	        <td><a href="#">Liga Cubana de Programación 2016 (Etapa V)</a></td>
	        <td>2016-05-28 10:00:00</td>
	        <td>2016-05-28 14:00:00</td>
	      </tr>
	      <tr>
	        <td>6</td>
	        <td>Private</td>
	        <td><a href="#">Liga Cubana de Programación 2016 (Etapa V)</a></td>
	        <td>2016-05-28 10:00:00</td>
	        <td>2016-05-28 14:00:00</td>
	      </tr>
	      <tr>
	        <td>7</td>
	        <td>Public</td>
	        <td><a href="#">Liga Cubana de Programación 2016 (Etapa V)</a></td>
	        <td>2016-05-28 10:00:00</td>
	        <td>2016-05-28 14:00:00</td>
	      </tr>
	    </tbody>
	  </table>
	  </div>
	<div>
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left:30em;">Create Contest</button>
	</div>

			<!--<script>
			$(function(){

$("#fecha").datepicker({
			    dateFormat: 'dd-mm-yy',
     minDate: '+5d',
     changeMonth: true,
     changeYear: true,
     altField: "#idTourDateDetailsHidden",
     altFormat: "yy-mm-dd"
			});

			});
			
			
		</script>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel">Modal title</h4>

            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="row">
                        <label for="idTourDateDetails">Tour Start Date:</label>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="idTourDateDetails" id="fecha" readonly="readonly" class="form-control"> <span class="input-group-addon"><i id="calIconTourDateDetails" class="glyphicon glyphicon-th"></i></span>

                            </div>
                        </div>Alt Field:
                        <input type="text" name="idTourDateDetailsHidden" id="idTourDateDetailsHidden">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>

    </div>-->
    <!-- /.modal -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<script>
			$(function(){
					$("#fechaIni").datepicker({
					    dateFormat: 'yy-dd-mm',
					    onSelect: function(datetext){
					        var d = new Date(); // for now
					        datetext=datetext+" "+d.getHours()+": "+d.getMinutes()+": "+d.getSeconds();
					        $('.fechaIni').val(datetext);
					    },
					    minDate: '+5d',
					    changeMonth: true,
					    changeYear: true,
					    altField: "#idTourDateDetailsHidden",
					    altFormat: "yy-mm-dd"
					});
				}
			);
			$(function(){
					$("#fechaFin").datepicker({
					    dateFormat: 'yy-dd-mm',
					    onSelect: function(datetext){
					        var d = new Date(); // for now
					        datetext=datetext+" "+d.getHours()+": "+d.getMinutes()+": "+d.getSeconds();
					        $('.fechaFin').val(datetext);
					    },
					    minDate: '+5d',
					    changeMonth: true,
					    changeYear: true,
					    altField: "#idTourDateDetailsHidden",
					    altFormat: "yy-mm-dd"
					});
				}
			);
			
		</script>
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Details</h4>
	      </div>
	      <div class="modal-body">
	      	<p>Name:</p>
	        <input type="text" id="name-problem" class="form-control" >
	        <p>Fecha de Inicio:</p>
	        <input id="fechaIni" type="text" readonly="readonly" class="form-control text-center"/>
	        
	        <p>Fecha de Termino:</p>
	        <input id="fechaFin" type="text" readonly="readonly" class="form-control text-center"/>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
</body>

