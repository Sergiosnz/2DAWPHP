
    <?php
     $filas = $_GET["filas"];
     $columnas = $_GET["columnas"];
    if (isset($_GET["filas"])& isset($_GET["columnas"]) & !empty($_GET["filas"])& !empty($_GET["columnas"])) {
       

        echo "<table border='1' cellpadding='10'>";
        
        // Generar la tabla
        for ($i = 1; $i <= $filas; $i++) {
            echo "<tr>";
            for ($x = 1; $x <= $columnas; $x++) {
                echo "<td>($i, $x)</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Datos no validos";
    }
    ?>

    <br>
    <a href="225formulario.html">Volver</a>
