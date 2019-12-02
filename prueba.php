<?php
$conn= new mysqli("localhost","root","root1234","codellege")
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
<?php

if($conn->connect_error){
    echo "OPss.. algo salio mal";
}else{
    $sqlito="INSERT INTO countries(country_name,region_id)";
    $sqlito.="VALUES('Dummy',100)";
    if($conn-> query($sqlito)===TRUE){
        echo "Registro agregado";
    }else{
        echo "Upss!!...algo salio mal";
        echo "Error:".$conn->error;
    }
    
}
?>
    
</body>
</html>