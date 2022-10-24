<?php
        $actualizar = Controlador::obtenerLocalidadControlador();
        foreach($actualizar as $datos)
        {
            $pk = $datos['pk_localidad'];
            $nombre = $datos['nombre_localidad'];
            $estado = $datos['nombre_municipio'];
            $pk_estado = $datos['pk_estado'];
            $pk_municipio = $datos['pk_municipio'];
        }
?>
<div class="card fondo-altas scale-up-ver-top">
  <div class="card-body fondo-altas">
  <h2>Edite una localidad</h2>
  <p>Edite un localidad existente</p>
  <form method="POST" autocomplete="of">
    <!-- ID ESTADO -->
    <input type="hidden" name="id_localidad" required value="<?php echo $pk ?>">
    <!-- LOCALIDAD -->
    <label for="">Nombre de la localidad:</label><br>
    <input class="input-alta" type="text" name="localidad" required value="<?php echo $nombre ?>"><br><br>
    <!-- MUNICIPIO -->
    <label for="">Seleccione municipio:</label><br>
    <select name="municipio" class="input-alta" required>
      <option value="">Seleccione...</option>
      <?php
          $consulta = Controlador::consultaMunicipiosControlador();
          foreach($consulta as $datos => $valores)
          {     
            $selected="";
             if($valores['pk_municipio']==$pk_municipio)
             {
                $selected="selected";
             }
              echo '<option '.$selected.' value="'.$valores["pk_municipio"].'">'.$valores["nombre_municipio"].'</option>';
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
    $registro -> actualizarLocalidadControlador();
?>