<div class="main-panel">
	<div class="content">
				<div class="container-fluid">
					<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header" data-background-color="purple">
	                                <h4 class="title">Tutorías</h4>
	                            </div>
	                            </br>
	                            <table id="myTable" class="datatable table table-striped primary" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>N°</th>
            <th>Día</th>
            <th>Profesor</th>
            <th>Hora Inicio</th>
            <th>Hora Termino</th>
            <th>Asignatura</th>
            <th>Lugar</th>
        </tr>
    </thead>
       <tbody>
       <?php foreach ($horarios as $key => $value) { ?>
            <tr>
            <td><?=$key+1?></td>
            <td><?=$value->get('hor_dia')?></td>
            <td><?=$value->get('usu_nombre')?></td>
            <td><?=$value->get('hor_inicio')?></td>
            <td><?=$value->get('hor_termino')?></td>
            <td><?=$value->get('asig_nombre')?></td>
            <td><?=$value->get('hor_sala')?></td>
            </tr> 
      <?php } ?>
    </tbody>
</table>
	                       
	                    </div>
	                    </div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>