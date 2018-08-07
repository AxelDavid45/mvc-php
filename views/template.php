<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Inicio</title>
    <style>

        header{
            position:relative;
            margin:auto;
            text-align:center;
            padding:5px;
        }

        nav{
            position:relative;
            margin:auto;
            width:100%;
            height:auto;
            background:black;
        }

        nav ul{
            position:relative;
            margin:auto;
            width:50%;
            text-align: center;
        }

        nav ul li{
            display:inline-block;
            width:24%;
            line-height: 50px;
            list-style: none;
        }

        nav ul li a{
            color:white;
            text-decoration: none;
        }

        section{
            position:relative;
            padding:20px;
        }

    </style>
</head>
<body>
<?php 
include "views/modules/navegacion.php";
?>

<section>
<!--Aqui requerimos la clase nueva-->
<?php
#aqui creamos una instancia del controlador
$mvc = new MvcController();
#llamamos al metodo enlacesnavcontroller para mostrar los enlaces
$mvc -> enlacesNavController();

?>

</section>
    
</body>
</html>