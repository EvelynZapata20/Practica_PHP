<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Inscritos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
        <div class="content-container">
            <h1>Usuarios Inscritos</h1>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $data; ?>
                    </tbody>
                </table>
            </div>    
        </div>
    </body>
</html>