<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas</title>
</head>
<body>
    <h1><?=$encabezado?></h1>
    <h2>REGISTRO DE TRANSPORTES</h2>
    <h3>Operaciones:</h3>
    <ul>
        <?php foreach ($menu as $key => $value) { ?>
            <li><a href="<?='?ctrl='.$key?>"><?=$value?></a></li>
        <?php } ?>
    </ul>
</body>
</html>