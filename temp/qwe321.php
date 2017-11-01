<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script  src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
<script  src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<form>
						<input id="titl" type="text" placeholder="Enter Event Title"></input>
				          <div id="datepicker" class="input-append">
				            <input id="dat" type="text" placeholder="Enter Event Date"></input>
				            <span class="add-on">
				              <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
				            </span>
				           </div>
				     

				      
				        <div id="timepicker" class="input-append">
				         <input id="tim" type="text" placeholder="Enter Event Time"></input>
				           <span class="add-on">
				            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
				          </span>
				        </div>


</form>
<script>




 $('#timepicker').datetimepicker({
	        format: 'hh:mm:ss',
	        language: 'pt-BR',
	        pickDate:false
	      });

	      $('#datepicker').datetimepicker({
	        format: 'yyyy-MM-dd',
	        language: 'pt-BR',
	        pickTime:false
	      });

</script>