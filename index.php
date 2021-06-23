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

    <table style="width:100%">
    <tbody>
        <tr>
        <!--Comienzo del formulario-->
        <td>
    <div>
        <h2>Ingrese los datos a guardar</h2>        

        <!--Creo el formulario-->

        <form action="save_task.php" method="POST">

        <p>Nombre</p>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese Su Nombre" required minlength="4" maxlength="100" size="50">
        <br>

        <p>Apellido</p>
        <input type="text" id="apellido" name="apellido" placeholder="Ingrese Su Apellido" required minlength="4" maxlength="100" size="50">
        <br>

        <p>Edad</p>
        <input type="number" id="edad" name="edad" placeholder="Ingrese Su Edad" required minlength="1" maxlength="3" size="50">
        <br>

        <p>Telefono</p>
        <input type="number" id="tel" placeholder="Ingrese Su Numero cel" name="tel" required minlength="8" maxlength="15" size="50">
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
<table style="border: solid #04AA6D 9px; border-radius: 15px;">
<tbody>
<tr>
<th style="border: 3px solid black">ID</th>
<th style="border: 3px solid black">Nombre</hd>
<th style="border: 3px solid black">Apellido</hd>
<th style="border: 3px solid black">Edad</th>
<th style="border: 3px solid black">Telefono</th>
<th style="border: 3px solid black">Genero</th>
<th style="border: 3px solid black">Acciones</th>
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
                <td style="border: 3px solid black"> <?php echo $row['id']?> </td>
                <td style="border: 3px solid black"> <?php echo $row['Nombre']?> </td>
                <td style="border: 3px solid black"> <?php echo $row['Apellido']?> </td>
                <td style="border: 3px solid black"> <?php echo $row['Edad']?> </td>
                <td style="border: 3px solid black"> <?php echo $row['Tel']?> </td>
                <td style="border: 3px solid black"> <?php echo $row['Genero']?> </td>
                <td style="border: 3px solid black"> <a href="update.php?id=<?php echo $row['id']?>"><img src="images/editar.png" alt="Editar"></a>            
                <a href="delete.php?id=<?php echo $row['id']?>"><img src="images/trash.png" alt="Eliminar"></a></td>
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

