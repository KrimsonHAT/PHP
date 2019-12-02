<?php
$conexion = new mysqli("localhost","root","root1234", "codellege");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <table border="1">
        <tr>
        <td>id</td>
        <td>FirstName</td>
        <td>LastName</td>
        <td>Adress</td>
        <td>PhoneNumber</td>
        </tr>
        <?php
            $sql = "SELECT * from person";
            $result= mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                <td><?php echo $mostrar['id']?></td>
                <td><?php echo $mostrar['FirstName']?></td>
                <td><?php echo $mostrar['LastName']?></td>
                <td><?php echo $mostrar['Adress']?></td>
                <td><?php echo $mostrar['PhoneNumber']?></td>
            </tr>
                <?php
            }
            ?>
    
    </table>
</body>
</html>