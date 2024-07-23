<?php
include 'db.php';

$data = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre'])) {
        $nombre = $conn->real_escape_string($_POST['nombre']);

        $sql = "INSERT INTO usuario (nombre) VALUES ('$nombre')";
        $result = $conn->query($sql);

        if ($result) {
            $sql = "SELECT nombre FROM usuario";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                $data .= "<tr><td>" . htmlspecialchars($row["nombre"]) . "</td></tr>";
            }
        }
    } else {
        echo "No se ha proporcionado el nombre<br>";
    }
}
else {
    echo "El método no es POST <br>";
}

include 'list.php';
?>

