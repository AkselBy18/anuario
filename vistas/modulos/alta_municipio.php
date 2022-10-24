<div class="card fondo-altas scale-up-ver-top">
  <div class="card-body fondo-altas">
  <h2>Alata de Municipios</h2>
  <p>Agregue un nuevo municipio</p>
  <form method="POST" autocomplete="of">
    <!-- MUNICIPIO -->
    <label for="">Nombre del municipio:</label><br>
    <input class="input-alta" type="text" name="municipio" required><br><br>
    <!-- ESTADO -->
    <label for="">Seleccione estado:</label><br>
    <select name="estado" class="input-alta" required>
      <option value="">Seleccione...</option>
      <?php
          $consulta = Controlador::consultaEstadoControlador();
          foreach($consulta as $datos => $valores)
          {
              echo '<option value="'.$valores["pk_estado"].'">'.$valores["nombre_estado"].'</option>';
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
    $registro -> registroMunicipioControlador();
?>