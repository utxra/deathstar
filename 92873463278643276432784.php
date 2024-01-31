<html>
    
    <head>
        <title>PHP 10</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="../../../favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="./index.css">
    </head>

    <?php
    
    $contraseñaftp = $_POST['contraseñaftp'];
    if ($contraseñaftp == '-1') {
        echo "<p style=' position: fixed;
        bottom: 0;
        right: 0;
        margin: 0;
        padding: 10px;'>Clave: luke</p>";
    } else {
        echo "Error";
    }
    ?>

</html>
