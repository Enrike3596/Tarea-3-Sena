<?php
/* 
    Desarrollador: Luis Enrique Cuellar Velasquez
    Programa: Técnico en Sistemas
    Evidencia: Uso de la función operaciones()
*/

// Incluye la biblioteca con la función
require_once 'biblioteca.php';

$resultado = null; // Para controlar cuándo mostrar el resultado

// Verifica si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero1 = $_POST['num1'] ?? 0;
    $numero2 = $_POST['num2'] ?? 0;
    $operacion = $_POST['operacion'] ?? 'S';

    // Llama a la función
    $resultado = operaciones($numero1, $numero2, $operacion);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora Básica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="mb-4">Calculadora Básica</h2>

    <!-- Formulario corregido con method POST -->
    <form method="POST">
      <div class="mb-3">
        <label for="num1" class="form-label">Número 1:</label>
        <input type="number" name="num1" id="num1" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="num2" class="form-label">Número 2:</label>
        <input type="number" name="num2" id="num2" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="operacion" class="form-label">Operación:</label>
        <select name="operacion" id="operacion" class="form-select" required>
          <option disabled selected>Selecciona una opción</option>
          <option value="Sum">Suma</option>
          <option value="Res">Resta</option>
          <option value="Mul">Multiplicación</option>
          <option value="Div">División</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <!-- Mostrar resultado -->
    <?php if (!is_null($resultado)): ?>
      <div class="alert alert-info mt-4">
        <strong>Resultado es :</strong> <?= $resultado ?>
      </div>
    <?php endif; ?>
  </div>
</body>
</html>
