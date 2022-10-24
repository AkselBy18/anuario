<div class="card fondo-altas scale-up-ver-top">
  <div class="card-body fondo-altas">
  <h2>Alta de carrera </h2>
  <p>Agregue una nueva carrera</p>
  <form method="POST" autocomplete="of">
    <!-- CARRERA -->
    <label for="">Nombre de la carrera:</label><br>
    <input class="input-alta" type="text" name="carrera" required><br><br>
    <!-- BOTON -->
    <button type="submit" class="btn btn-lg btn-color">Guardar <i class="fa-solid fa-share-from-square"></i></button>
  </form>
  </div>
</div>
<?php
    $registro = new Controlador();
    $registro -> registroCarreraControlador();
?>