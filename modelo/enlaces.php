<?php

class Paginas
{
    static public function enlacesPaginasModelo($x)
    {
        if($x == "index")
        {
            $modulo = "vistas/modulos/principal.php";
        }
        else if($x == "alta_estado")
        {
            $modulo = "vistas/modulos/alta_estado.php";
        }
        else if($x == "alta_municipio")
        {
            $modulo = "vistas/modulos/alta_municipio.php";
        }
        else if($x == "alta_localidad")
        {
            $modulo = "vistas/modulos/alta_localidad.php";
        }
        else if($x == "alta_personas")
        {
            $modulo = "vistas/modulos/alta_personas.php";
        }
        else if($x == "alta_carrera")
        {
            $modulo = "vistas/modulos/alta_carrera.php";
        }
        else if($x == "mostrar_estado")
        {
            $modulo = "vistas/modulos/mostrar_estado.php";
        }
        else if($x == "editar_estado")
        {
            $modulo = "vistas/modulos/editar_estado.php";
        }
        else if($x == "editar_localidad")
        {
            $modulo = "vistas/modulos/editar_localidad.php";
        }
        else if($x == "editar_carrera")
        {
            $modulo = "vistas/modulos/editar_carrera.php";
        }
        else if($x == "mostrar_municipio")
        {
            $modulo = "vistas/modulos/mostrar_municipio.php";
        }
        else if($x == "mostrar_localidad")
        {
            $modulo = "vistas/modulos/mostrar_localidad.php";
        }
        else if($x == "mostrar_carrera")
        {
            $modulo = "vistas/modulos/mostrar_carrera.php";
        }
        else if($x == "editar_municipio")
        {
            $modulo = "vistas/modulos/editar_municipio.php";
        }
        else
        {
            $modulo = "vistas/modulos/login.php";
        }

        return $modulo;
    }
}