<h1 class="mt-5">Editar Usuario</h1>
<form action="<?php echo base_url("usuarios/editar/").$parametros['id']; ?>" method="post">
	<div class="form-group">
    	<label for="char_usuario">Nombre</label>
      	<input type="text" class="form-control" name="char_usuario" id="char_usuario" value="<?php echo $parametros['usuario']['char_usuario']; ?>">
  	</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="char_ape_pat">Apellido Paterno</label>
      <input type="text" class="form-control" id="char_ape_pat" name="char_ape_pat" value="<?php echo $parametros['usuario']['char_ape_pat']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="char_ape_mat">Apellido Materno</label>
      <input type="char_ape_mat" class="form-control" name="char_ape_mat" id="char_ape_mat" value="<?php echo $parametros['usuario']['char_ape_mat']; ?>">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <button type="button" class="btn btn-default" onclick="location.href='<?php echo base_url("usuarios/"); ?>'">Salir</button>
</form>