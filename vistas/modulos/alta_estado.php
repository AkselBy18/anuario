<div class="card fondo-altas scale-up-ver-top">
  <div class="card-body fondo-altas">
  <h2>Alata de estado</h2>
  <p>Agregue un nuevo estado</p>
  <form method="POST" autocomplete="of">
    <!-- ESTADO -->
    <label for="">Nombre del estado:</label><br>
    <input class="input-alta" type="text" name="estado" required><br><br>
    <!-- BOTON -->
    <button type="submit" class="btn btn-lg btn-color">Guardar <i class="fa-solid fa-share-from-square"></i></button>
  </form>
  </div>
</div>
<?php
    $registro = new Controlador();
    $registro -> registroEstadoControlador();
?>