<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Recogemos los valores del HTML y usamos POST porque no tiene limite de caracteres y es un fomulario
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $url = $_POST["url"];
        $sexo = $_POST["sexo"];
        $convivientes = $_POST["convivientes"];
//Los recogemos como arrays y vemos si esta vacio para guardar el array con valores o un array vacio
        $aficiones = isset($_POST["aficiones"]) ? $_POST["aficiones"] : [];
        $menu = isset($_POST["menu"]) ? $_POST["menu"] : [];

        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>Campo</th><th>Valor</th></tr>";
        
        echo "<tr><td>Nombre y Apellidos</td><td>$nombre</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "<tr><td>URL Página Personal</td><td>$url</td></tr>";
        echo "<tr><td>Sexo</td><td>$sexo</td></tr>";
        echo "<tr><td>Número de Convivientes</td><td>$convivientes</td></tr>";
        
        echo "<tr><td>Aficiones</td><td>";
        echo implode(", ", $aficiones);
        echo "</td></tr>";
        
        echo "<tr><td>Menú Favorito</td><td>";
        echo implode(", ", $menu);
        echo "</td></tr>";

        echo "</table>";
    } else {
        echo "<p>Acceso Denegado, Formulario no Realizado</p>";
    }
?>
