<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuario</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/ae1b5f3a79.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- DataTables CSS library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"/>
    <!-- DataTables JS library -->
    <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- DataTables JBootstrap -->
    <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <style>
        body{
            background-color: #F4EEA9;

        }

        .scale-up-ver-top {
	        -webkit-animation: scale-up-ver-top 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
	        animation: scale-up-ver-top 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
        }

        @-webkit-keyframes scale-up-ver-top {
        0% {
            -webkit-transform: scaleY(0.4);
                    transform: scaleY(0.4);
            -webkit-transform-origin: 100% 0%;
                    transform-origin: 100% 0%;
        }
        100% {
            -webkit-transform: scaleY(1);
                    transform: scaleY(1);
            -webkit-transform-origin: 100% 0%;
                    transform-origin: 100% 0%;
        }
        }
        @keyframes scale-up-ver-top {
        0% {
            -webkit-transform: scaleY(0.4);
                    transform: scaleY(0.4);
            -webkit-transform-origin: 100% 0%;
                    transform-origin: 100% 0%;
        }
        100% {
            -webkit-transform: scaleY(1);
                    transform: scaleY(1);
            -webkit-transform-origin: 100% 0%;
                    transform-origin: 100% 0%;
        }
        }


        .scale-up-hor-left {
        	-webkit-animation: scale-up-hor-left 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
	        animation: scale-up-hor-left 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
        }

        @-webkit-keyframes scale-up-hor-left {
        0% {
            -webkit-transform: scaleX(0.4);
                    transform: scaleX(0.4);
            -webkit-transform-origin: 0% 0%;
                    transform-origin: 0% 0%;
        }
        100% {
            -webkit-transform: scaleX(1);
                    transform: scaleX(1);
            -webkit-transform-origin: 0% 0%;
                    transform-origin: 0% 0%;
        }
        }
        @keyframes scale-up-hor-left {
        0% {
            -webkit-transform: scaleX(0.4);
                    transform: scaleX(0.4);
            -webkit-transform-origin: 0% 0%;
                    transform-origin: 0% 0%;
        }
        100% {
            -webkit-transform: scaleX(1);
                    transform: scaleX(1);
            -webkit-transform-origin: 0% 0%;
                    transform-origin: 0% 0%;
        }
        }

        .sombra{
            box-shadow: 14px 20px 10px #064635;
        }
        .fondo{
            margin-left: 30%;
            margin-right: 30%;
            margin-top: 10%;
            background-color: #519259;
            text-align: center;
            color: #fff;
            border-radius: 10px;
        }
        .input{
            border-radius: 5px;
            border: 0;
            outline: none;
            width: 100%;
        }
        .input-alta{
            border-radius: 5px;
            border: 0;
            outline: none;
            width: 100%;
            text-transform: capitalize;
        }
        .btn-color{
            background-color: #F4EEA9;
            color: #000;
        }
        .btn-color:hover{
            background-color: #064635;
            color: #fff;
        }
        .menu-color{
            background-color: #519259;
            color: #fff;
        }
        .menu-color a{
            color: #fff;
        }
        .menu-color a:hover{
            color: #F0BB62;
        }

        .fondo-altas{
            margin-left: 25%;
            margin-right: 25%;
            margin-top: 5%;
            background-color: #519259;
            color: #fff;
            border-radius: 10px;
        }
        .tablas-borde{
            margin-left: 3%;
            margin-right: 3%;
            margin-top: 8%;
            background-color: #519259;
            border-radius: 10px;
            color: white;
            box-shadow: 14px 20px 10px #064635;
            border-style: solid;
            border-color: #F0BB62;
        }
        .tablas-borde label,div{
            color: white;
        }
        .botones-tabla-editar{
            border-radius: 10px;
            background-color: #2146C7;
            border: none;
            width: 4rem;
            color: #fff;
        }
        .botones-tabla-borrar{
            border-radius: 10px;
            background-color: #FF1E1E;
            border: none;
            width: 4rem;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- MENU -->
    <?php
        if(isset($_GET['opcion']))
        {
            $enlace = $_GET['opcion'];
            include "modulos/menu.php";
        }
        else{

        }
    ?>

    <div class="container">
        <!-- aqui va la parte dinamica -->
        <?php
            $mvc = new Controlador();
            $mvc -> enlacesPaginasControlador();
        ?>
    </div>
</body>
</html>