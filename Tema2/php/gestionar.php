<?php
$ruta = '../';
$ruta = '../';
include 'header.php';

// Procesar el formulario
if (!empty($_POST['correo']) && !empty($_POST['clave']) && !empty($_POST['plan'])) {
  $plan = $_POST['plan'];
  $correo = $_POST['correo'];
  // Invocar a la función para Calcular la tarifa

  require_once('./myFunctions.php');
  $tarifa = calcularTarifa($plan);

  // Mostrar el resultado
?>

  <article>
    <header>
      <h1>Gestion del plan</h1>
    </header>

    <main>
      <table class="table">
        <thead>
          <th>Correo</th>
          <th>Plan</th>
          <th>Costo + IVA</th>
        </thead>
        <tbody>
        <?php 
          echo '<td>'. $correo .'</td>';
          echo '<td>'. $plan .'</td>';
          echo '<td>'. $tarifa .'</td>';
        ?>
        </tbody>
      </table>

    </main>
  </article>


<?php
  include 'footer.php';
} else {
  echo '<h1>Faltan datos! </h1>';
}
?>