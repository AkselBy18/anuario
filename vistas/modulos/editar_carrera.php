<?php
        $actualizar = Controlador::obtenerCarreraControlador();
        foreach($actualizar as $datos)
        {
            $pk = $datos['pk_carrera'];
            $carrera = $datos['nombre_carrera'];
        }
        ?>
<div class="card fondo-altas scale-up-ver-top">
  <div class="card-body fondo-altas">
  <h2>Edite una carrera</h2>
  <p>Edite una carrera existente</p>
  <form method="POST" autocomplete="of">
             <!-- ID ESTADO -->
            <input type="hidden" name="id_carrera" required value="<?php echo $pk ?>">
            <!-- ESTADO --> 
            <label for="">Nombre de la carrera:</label><br>
            <input class="input-alta" type="text" name="carrera" required value="<?php echo $carrera ?>"><br><br>
            <!-- BOTON -->
            <button type="submit" class="btn btn-lg btn-color">Guardar <i class="fa-solid fa-share-from-square"></i></button>
            </form>
  </div>
</div>
<?php
    $registro = new Controlador();
    $registro -> actualizarCarreraControlador();
?>