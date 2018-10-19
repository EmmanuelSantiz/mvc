<h1 class="mt-5">Lista de Usuarios</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>
					ID
				</td>
				<td>
					Nombre
				</td>
				<td>
					Fecha
				</td>
				<td>
					Opcionces
				</td>
			</tr>
		</thead>
		<tbody>
			<?php
			crear_tabla($parametros['usuarios']);
			?>
		</tbody>
	</table>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">BORRAR</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
      </div>
      <div class="modal-body">
      	<p class="text-center">¿Esta seguro que desea eliminar este registro?</p>
      	<input type="hidden" name="id_usuario" id="id_usuario" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="proceso" onclick="proceso()">Procesar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	var urlDelete = '<?php echo base_url("usuarios/borrar/"); ?>';

	function update(id) {
		window.location.href = '<?php echo base_url("usuarios/editar/"); ?>'+id;
	}

	function borrar(id) {
		$('#id_usuario').val('').val(id);
		$('#myModal').modal('show')
	}

	function proceso() {
		$.post(urlDelete, {id_usuario: $('#id_usuario').val()}, function(data) {
			if (data.data) {
				window.location.reload(true);
			}
		});
	}
</script>
<?php
function crear_tabla($array = array()) {
	if(count($array) > 0) {
		foreach($array as $key) {
			echo '<tr>';
			echo '<td>'.$key['id_usuario'].'</td>';
			echo '<td>'.$key['char_usuario'].'</td>';
			echo '<td>'.$key['date_fecha'].'</td>';
			echo '<td><button type="button" class="btn btn-warning" onclick="update('.$key['id_usuario'].')">Update</button><button type="button" class="btn btn-danger" onclick="borrar('.$key['id_usuario'].')">Delete</button></td>';
			echo '</tr>';
		}
	} else {
		echo '<tr class="danger"><td colspan="3" class="text-center" style="font-size: 13px;">SIN DATOS!!</td></tr>';
	}
}
?>