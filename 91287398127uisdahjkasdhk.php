<html>
<head>
    <title>PHP 10</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../../../favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    
<?php

$usuarioftp = $_POST['usuarioftp'];
if ($usuarioftp == 'soto') {
    header('Location: ./2190833280987392189327.html');
    exit();
} else {
    echo "La palabra ingresada no es correcta. Inténtalo de nuevo.";
}
?>
</body>

</html>