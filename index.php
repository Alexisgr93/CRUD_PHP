<!--Me conecto a la DBA-->
<?php include("db.php");?>
<!--Me conecto a la DBA-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>

    <!--CSS-->
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <!--CSS-->


    <!--Esta linea de codigo llama al archivo banner.php y lo muestra en la pantalla-->
    <?php include("banner.php")?>
    <!--Esta linea de codigo llama al archivo banner.php y lo muestra en la pantalla-->

    <table>
<tbody>
<tr>
<!--Comienzo del formulario-->
<td>
<div>
        <h2>Ingrese los datos a guardar</h2>        

        <!--Creo el formulario-->

        <form action="save_task.php" method="POST">

        <p>Nombre</p>
        <input type="text" id="nombre" name="nombre" required minlength="4" maxlength="100" size="50">
        <br>

        <p>Apellido</p>
        <input type="text" id="apellido" name="apellido" required minlength="4" maxlength="100" size="50">
        <br>

        <p>Edad</p>
        <input type="number" id="edad" name="edad" required minlength="1" maxlength="3" size="50">
        <br>

        <p>Telefono</p>
        <input type="number" id="tel" name="tel" required minlength="8" maxlength="15" size="50">
        <br>
        
        <p>Indique su genero</p>
        <input type="radio" id="generoM" name="genero" value="M">
        <label>Masculino</label><br>
    
        <input type="radio" id="generoF" name="genero" value="F">
        <label>Femenino</label><br>
        <br>

        <input type="submit" name="guardar_objeto" value="Guardar">
        </form>      
    </div>
</td>
<!--Fin del formulario-->
<!--Cargo los datos-->
<td>
<table>
<tbody>
<tr>
<th>ID</th>
<th>Nombre</hd>
<th>Apellido</hd>
<th>Edad</th>
<th>Telefono</th>
<th>Genero</th>
</tr>
<tr>
<!--Realizo la consulta-->
<?php
    $query = "SELECT * FROM `personas`";
    $consulta = mysqli_query($conn, $query);
    ?>
    <?php
    while($row = mysqli_fetch_array($consulta)){
        ?>
        <tr>
            <td> <?php echo $row['id']?> </td>
            <td> <?php echo $row['Nombre']?> </td>
            <td> <?php echo $row['Apellido']?> </td>
            <td> <?php echo $row['Edad']?> </td>
            <td> <?php echo $row['Tel']?> </td>
            <td> <?php echo $row['Genero']?> </td>
            <td> <a href="update.php?id=<?php echo $row['id']?>">Editar</a>            
             <a href="delete.php?id=<?php echo $row['id']?>">Borrar</a></td>
        </tr>
    <?php
    }
    ?>

    

<!--Realizo la consulta-->
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>  
</head>
<body>
    
</body>
</html>

