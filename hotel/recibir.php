<?php

    echo"<h1>Recibiendo informacion del formulario de registro</h1>";

    $tipo = $_GET['tipo_h'];
    $precio = $_GET['precio_h'];
    $cantidad = $_GET['cantidad_h'];
    $codigo=$_GET['id_h']

  

    $sql="INSERT INTO usuarios VALUE ($tipo,$precio,$cantidad,3)";

    //condicion para evaluar registro correctamente habitacion

    if(mysqli_query($conn,$sql))
    {
      echo " habitacion registrado correctamente ";
    }
    else{
      echo "error".$sql."<br>".mysqli_error($conn);
    }

    $sql
    
?>

<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body >

  <section style ="padding: 20px;">
    
  <table class="table" style="background:white; color:black;  border-color:#8F3A84;">
    <thead style ="background:#35b3a7;">
      <th scope ="col">Tipo</th>
      
      <th sope ="col">cantidad</th>
      <th scope ="col">precio</th>
      <th scope ="col">codigo</th>
      <th sope ="col"></th>
    </thead>
    <tbody>
      <tr>
        <td><?=$tipo?></td>
        <td><?=$cantidad?></td>
        <td><?=$precio?></td>
        <td><?=$codigo?></td>

        <td><button style="background:red; color:white;">Eliminar</button> <br>
        <button style ="background:green; color:black;">Modificar</button></td></br>
      </tr>
  
  </section>

</body>

</html>
