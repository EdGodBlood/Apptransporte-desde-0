<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$titulo?></title>
<!-- CSS only -->
<link rel="stylesheet" href="recursos/css/bootstrap.min.css" >
<link rel="stylesheet" href="recursos/icons/bootstrap-icons.css">
</head>
<body>
<h1><?=$encabezado?></h1>
<a href="?ctrl=CtrlRegistros&accion=nuevo" class="btn btn-primary">
<i class="bi bi-plus-circle"></i>
Insertar Nuevo Registro</a>
<br><br>
<table class="table table-striped">
<tr>
<th>Id Registros</th>
<th>Origen / Destino</th>
<th>Operaciones</th>
</tr>
<?php
if (is_array($datos))
foreach ($datos as $c) { ?>
<tr>
<td><?=$c["id_reg"]?></td>
<td><?=$c["od_reg"]?></td>

<td>
<a href="?ctrl=CtrlRegistros&accion=editar&id_reg=<?=$c["id_reg"]?>">
<i class="bi bi-pencil-square"></i> Editar </a>
/ 
<a href="?ctrl=CtrlRegistros&accion=eliminar&id_reg=<?=$c["id_reg"]?>">
<i class="bi bi-trash"></i> Eliminar </a>
</td>

</tr>
<?php } ?>
</table>
<br><a href="?" class="btn btn-primary">
<i class="bi bi-arrow-90deg-left"></i>
Retornar</a>
</body>
</html>