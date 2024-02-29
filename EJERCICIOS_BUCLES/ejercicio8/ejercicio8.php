<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar el formulario y generar menús
    $menus = $_POST['menus'];
    $menuItems = explode(PHP_EOL, $menus);
    $menuSuperior = '';
    $menuInferior = '';
    $gridSize = 4; // Tamaño fijo del grid

    foreach ($menuItems as $menuItem) {
        $menuDetails = explode('-', $menuItem);

        // Verificamos si hay suficientes elementos en menuDetails
        if (count($menuDetails) >= 4) {
            $tipoMenu = strtoupper(substr($menuDetails[0], 0, 1)); // S para  menu superior, I para  menu inferior
            $ordenMenu = $menuDetails[0];
            $nombreMenu = $menuDetails[1];
            $colorLetra = $menuDetails[2];
            $urlDestino = $menuDetails[3];

            $menu = "<a href='{$urlDestino}' style='color: {$colorLetra}; text-decoration: none; padding: 5px; margin-right: 10px; border: 1px solid #ccc; border-radius: 5px;'>{$nombreMenu}</a>";

            if ($tipoMenu == 'S') {
                $menuSuperior .= $menu;
            } elseif ($tipoMenu == 'I') {
                $menuInferior .= $menu;
            }
        } 
    }

    // Procesamos la información del grid y generamos la tabla
    $tableRows = '';
    for ($i = 1; $i <= $gridSize; $i++) {
        $tableRow = '<tr>';
        for ($j = 1; $j <= $gridSize; $j++) {
            $checkboxName = "checkbox_{$i}_{$j}";

            if (isset($_POST[$checkboxName])) {
                // Si el checkbox está marcado, usar un color de fondo diferente
                $bgColor = 'background-color: #c0c0c0;';
            } else {
                $bgColor = '';
            }

            $tableRow .= "<td style='{$bgColor}; padding: 10px; border: 1px solid #ddd;'></td>";
        }
        $tableRow .= '</tr>';
        $tableRows .= $tableRow;
    }

  

    // Mostramos el menú superior sin Bootstrap
    echo "<div style='margin-top: 20px;'>";
    echo "<h4>Menú Superior:</h4>";
    echo "<div style='display: flex;'>";
    echo $menuSuperior;
    echo "</div>";
    echo "</div>";
    echo "</div>";
      // Mostramos la tabla sin Bootstrap porque me esta dando probremilla 
      echo "<div style='margin-top: 20px;'>";
      echo "<h4 style='margin-bottom: 10px;'>Tabla con Grid:</h4>";
      echo "<table style='border-collapse: collapse; width: 100%;'>";
      echo $tableRows;
      echo "</table>";
  
    // Mostramos el menú inferior sin Bootstrap
    echo "<div style='margin-top: 20px;'>";
    echo "<h4>Menú Inferior:</h4>";
    echo "<div style='display: flex;'>";
    echo rtrim($menuInferior);
    echo "</div>";
    echo "</div>";
}
?>
