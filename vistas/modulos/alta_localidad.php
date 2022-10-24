<div class="card fondo-altas scale-up-ver-top">
  <div class="card-body fondo-altas">
  <h2>Alata de Localidades</h2>
  <p>Agregue una nueva localidad</p>
  <form method="POST" autocomplete="of">
    <!-- MUNICIPIO -->
    <label for="">Nombre de la localidad:</label><br>
    <input class="input-alta" type="text" name="localidad" required><br><br>
    <!-- ESTADO -->
    <label for="">Seleccione municipio:</label><br>
    <select name="municipio" class="input-alta" required>
      <option value="">Seleccione...</option>
      <?php
          $consulta = Controlador::consultaMunicipiosControlador();
          foreach($consulta as $datos => $valores)
          {
              echo '<option value="'.$valores["pk_municipio"].'">'.$valores["nombre_municipio"].'</option>';
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
    $registro -> registroLocalidadControlador();
?>