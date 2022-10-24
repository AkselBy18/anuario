<?php
        $actualizar = Controlador::obtenerMunicipioControlador();
        foreach($actualizar as $datos)
        {
            $pk = $datos['pk_municipio'];
            $nombre = $datos['nombre_municipio'];
            $estado = $datos['nombre_estado'];
            $pk_estado = $datos['fk_estado'];
        }
?>
<div class="card fondo-altas scale-up-ver-top">
  <div class="card-body fondo-altas">
  <h2>Edite un  Municipio</h2>
  <p>Edite un municipio existente</p>
  <form method="POST" autocomplete="of">
    <input type="hidden" value="<?php echo $pk ?>" name="id_municipio">
    <!-- MUNICIPIO -->
    <label for="">Nombre del municipio:</label><br>
    <input class="input-alta" type="text" name="municipio" required value="<?php echo $nombre ?>"><br><br>
    <!-- ESTADO -->
    <label for="">Seleccione estado:</label><br>
    <select name="estado" class="input-alta" required>
      <option value="">Seleccione...</option>
      <?php
          $consulta = Controlador::consultaEstadoControlador();
          foreach($consulta as $datos => $valores)
          {     
            $selected="";
             if($valores['pk_estado']==$pk_estado)
             {
                $selected="selected";
             }
              echo '<option '.$selected.' value="'.$valores["pk_estado"].'">'.$valores["nombre_estado"].'</option>';
          }
      ?>
    </select><br><br>
    <!-- BOTON -->
    <button type="submit" class="btn btn-lg btn-color">Guardar <i class="fa-solid fa-share-from-square"></i></button>
  </form>
  </div>
</div>
<?php
    $registro = new Controlador();
    $registro -> actualizarMunicipioControlador();
?>