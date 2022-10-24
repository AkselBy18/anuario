<div class="card fondo-altas scale-up-ver-top">
  <div class="card-body fondo-altas">
  <h2>Alata de Personas</h2>
  <p>Agregue una nueva Persona</p>
  <form action="" method="POST" enctype="multipart/form-data">
    <!-- NOMBRES -->
    <label for="">Nombres:</label><br>
    <input class="input-alta" type="text" name="nombre" required><br><br>
    <!-- APELLIDO PATERNO -->
    <label for="">Apellido Paterno:</label><br>
    <input class="input-alta" type="text" name="primer_apellido" required><br><br>
    <!-- APELLIDO PATERNO -->
    <label for="">Apellido Materno:</label><br>
    <input class="input-alta" type="text" name="segundo_apellido" required><br><br>
    <!-- FECHA DE NACIMIENTO -->
    <label for="">Fecha de nacimiento:</label><br>
    <input class="input-alta" type="date" name="fecha_nacimiento" required><br><br>
    <!-- CELULAR -->
    <label for="">Celular:</label><br>
    <input class="input-alta" type="text" name="celular" required><br><br>
    <!-- CORREO -->
    <label for="">Correo:</label><br>
    <input class="input-alta" type="email" name="correo_electronico" required><br><br>
    <!-- FOTO -->
    <label for="">Foto:</label><br>
    <input class="input-alta" type="file" name="archivo" id="foto" required><br><br>
    <!-- VIDEO -->
    <label for="">Video:</label><br>
    <input class="input-alta" type="file" name="video" required><br><br>
    <!-- DOMICILIO -->
    <label for="">Domicilio:</label><br>
    <input class="input-alta" type="text" name="domicilio" required><br><br>
    <!-- ESTADO -->
    <label for="">Seleccione localidad:</label><br>
    <select name="municipio" class="input-alta" required>
      <option value="">Seleccione...</option>
      <?php
          $consulta = Controlador::consultaLocalidadControlador();
          foreach($consulta as $datos => $valores)
          {
              echo '<option value="'.$valores["pk_localidad"].'">'.$valores["localidad"].'</option>';
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
    $registro -> registroPersonaControlador();
?>