        <?php
        $actualizar = Controlador::obtenerEstadoControlador();
        foreach($actualizar as $datos)
        {
            $pk = $datos['pk_estado'];
            $nombre = $datos['nombre_estado'];
        }
        ?>
<div class="card fondo-altas scale-up-ver-top">
  <div class="card-body fondo-altas">
  <h2>Edite un estado</h2>
  <p>Edite un estado existente</p>
  <form method="POST" autocomplete="of">
             <!-- ID ESTADO -->
            <input type="hidden" name="id_estado" required value="<?php echo $pk ?>">
            <!-- ESTADO --> 
            <label for="">Nombre del estado:</label><br>
            <input class="input-alta" type="text" name="estado" required value="<?php echo $nombre ?>"><br><br>
            <!-- BOTON -->
            <button type="submit" class="btn btn-lg btn-color">Guardar <i class="fa-solid fa-share-from-square"></i></button>
            </form>
  </div>
</div>
<?php
    $registro = new Controlador();
    $registro -> actualizarEstadoControlador();
?>