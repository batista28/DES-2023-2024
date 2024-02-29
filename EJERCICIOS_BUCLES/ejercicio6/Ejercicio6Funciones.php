<?php

// Función para crear una tabla con cierto color, numero de columnas y filas
function crearTabla($color, $columnas, $filas)
{// Iniciamos la etiqueta de la tabla con borde y estilo de fondo
    echo "<table border='1' style='background-color:$color;'>"; 
    for ($i = 0; $i < $filas; $i++) {
        echo "<tr>"; // Iniciamo0s una nueva fila en la tabla
        for ($j = 0; $j < $columnas; $j++) {
            echo "<td>&nbsp;</td>"; // Creamos una celda vacía en la fila
        }
        echo "</tr>"; 
    }
    echo "</table>"; 
}

// Funcionn para crear un menú desplegable de edad
function crearEdad()
{
    echo "<label for='edad'>Edad:</label>"; 
    echo "<select name='edad'>"; 
    /*aqui creamos un for que sea de valor 1 y sea menor a 120  */
    for ($i = 1; $i <= 120; $i++) {
        echo "<option value='$i'>$i</option>"; // Aqui mostramos un option value con la variable i para ir mostrado los distintos numeros
    echo "</select>"; // Cierra el menú desplegable
}
}
// Funcion para crear opciones de género mediante botones de radio
function crearSexo()
{
    echo "<label>Sexo:</label>"; 
    echo "<input type='radio' name='sexo' value='masculino'> Masculino"; 
    echo "<input type='radio' name='sexo' value='femenino'> Femenino";
}

// crearemos esta función para crear un tex area  para observaciones
function crearObservaciones($ancho, $filas)
{/
    echo "<label for='observaciones'>Observaciones:</label>"; 
    echo "<textarea name='observaciones' rows='$filas' cols='$ancho'></textarea>"; 
}

?>
