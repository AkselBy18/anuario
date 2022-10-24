<?php 
require_once "conexion.php";

class Modelo extends Conexion
{   
    // AQUI PONEMOS TODAS LAS CONSULTAS SQL

    #ZONA DE ELIMINACIONES
    #____________________________________________________

     #ELIMINAR UN ESTADO
     static public function borrarEstadoModelo($tabla,$estado)
     {
        try {
            $consulta = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE pk_estado = $estado");
            
            $consulta->execute();
            $resultado ="ok";
            
            } catch (PDOException $e) {
             
                $resultado = $e->getMessage();
            }
            
            return $resultado;
     
             $consulta->close();
     }

    #ELIMINAR UNA LOCALIDAD
     static public function borrarLocalidadModelo($tabla,$localidad)
     {
         $consulta = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE pk_localidad = $localidad");
 
         $consulta -> execute();
 
         if($consulta->execute()){
            $resultado ="ok";
        }
        else{
            $resultado = "error";
        }
        return $resultado;
 
         $consulta->close();
     }

      #ELIMINAR UNA CARRERA
      static public function borrarCarreraModelo($tabla,$localidad)
      {
          $consulta = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE pk_carrera = $localidad");
  
          $consulta -> execute();
  
          if($consulta->execute()){
             $resultado ="ok";
         }
         else{
             $resultado = "error";
         }
         return $resultado;
  
          $consulta->close();
      }

     #ELIMINAR UN MUNICIPIO
     static public function borrarMunicipioModelo($tabla,$municipio)
     {
         
        try {
        $consulta = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE pk_municipio = $municipio");
        
        $consulta->execute();
        $resultado ="ok";
        
        } catch (PDOException $e) {
         
            $resultado = $e->getMessage();
        }
        
        return $resultado;
 
         $consulta->close();
     }

    #ZONA DE CONSULTAS PARA LOS SELECT
    #_____________________________________________________
  
    #OBTENER TODOS LOS ESTADOS
    static public function consultaEstadoModelo($tabla)
    {
        $consulta = Conexion::conectar()->prepare("SELECT pk_estado, nombre_estado FROM $tabla");

        $consulta -> execute();

        return $consulta->fetchAll();

        $consulta->close();
    }

    #OBTENER UN ESTADO EN ESPECIFICO
    static public function obtenerEstadoModelo($tabla,$estado)
    {
        $consulta = Conexion::conectar()->prepare("SELECT pk_estado, nombre_estado FROM $tabla WHERE pk_estado = $estado");

        $consulta -> execute();

        return $consulta->fetchAll();

        $consulta->close();
    }

    #OBTENER UNA CARRERA EN ESPECIFICO
    static public function obtenerCarreraModelo($tabla,$carrera)
    {
        $consulta = Conexion::conectar()->prepare("SELECT pk_carrera, nombre_carrera FROM $tabla WHERE pk_carrera = $carrera");

        $consulta -> execute();

        return $consulta->fetchAll();

        $consulta->close();
    }

     #OBTENER UN MUNICIPIO EN ESPECIFICO
     static public function obtenerMunicipioModelo($tabla,$tabla2,$municipio)
     {
         $consulta = Conexion::conectar()->prepare("SELECT pk_municipio, nombre_municipio, fk_estado,nombre_estado FROM $tabla,$tabla2 WHERE pk_municipio = $municipio and fk_estado = pk_estado");
 
         $consulta -> execute();
 
         return $consulta->fetchAll();
 
         $consulta->close();
     }

     #OBTENER UNA LOCALIDAD EN ESPECIFICO
     static public function obtenerLocalidadModelo($tabla,$tabla2,$tabla3,$localidad)
     {
         $consulta = Conexion::conectar()->prepare("SELECT pk_localidad, nombre_localidad, nombre_municipio, pk_estado, pk_municipio FROM $tabla,$tabla2,$tabla3 WHERE fk_municipio = pk_municipio AND fk_estado = pk_estado AND pk_localidad = $localidad");
 
         $consulta -> execute();
 
         return $consulta->fetchAll();
 
         $consulta->close();
     }

    #OBTENER TODOS LOS MUNICIPIOS
    static public function consultaMunicipiosModelo($tabla)
    {
        $consulta = Conexion::conectar()->prepare("SELECT pk_municipio, nombre_municipio FROM $tabla");

        $consulta -> execute();

        return $consulta->fetchAll();

        $consulta->close();
    }

    #OBTENER TODAS LAS LOCALIDADES
    static public function consultaLocalidadModelo($tabla,$tabla2,$tabla3)
    {
        $consulta = Conexion::conectar()->prepare("SELECT CONCAT(nombre_localidad,' ',nombre_municipio,' ',nombre_estado) as 'localidad', pk_localidad
        FROM $tabla,$tabla2,$tabla3
        WHERE fk_municipio = pk_municipio and $tabla3.fk_estado = pk_estado ");

        $consulta -> execute();

        return $consulta->fetchAll();

        $consulta->close();
    }

    #ZONA DE ALTAS
    #______________________________________________________

    #ALTA DE ESTADOS
    static public function RegistroEstadoModelo($datosModelo, $tabla)
    {
        //consulta para insertar los datos en la tabla
        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_estado) VALUES (:nombre_estado)");

        //optenemos los parametros del arreglo
        $consulta->bindParam(":nombre_estado", $datosModelo["estado"], PDO::PARAM_STR);
       
        if($consulta->execute()){
            $resultado ="ok";
        }
        else{
            $resultado = "error";
        }
        return $resultado;

        $consulta->close();

    }

    #ALTA DE CARRERAS
    static public function registroCarreraModelo($datosModelo, $tabla)
    {
        //consulta para insertar los datos en la tabla
        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_carrera) VALUES (:nombre_carrera)");

        //optenemos los parametros del arreglo
        $consulta->bindParam(":nombre_carrera", $datosModelo["carrera"], PDO::PARAM_STR);
       
        if($consulta->execute()){
            $resultado ="ok";
        }
        else{
            $resultado = "error";
        }
        return $resultado;

        $consulta->close();

    }

     #ALTA DE MUNICIPIOS
     static public function registroLocalidadModelo($datosModelo, $tabla)
     {
         //consulta para insertar los datos en la tabla
         $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_localidad,fk_municipio) VALUES (:nombre_localidad, :fk_municipio)");
 
         //optenemos los parametros del arreglo
         $consulta->bindParam(":nombre_localidad", $datosModelo["localidad"], PDO::PARAM_STR);
         $consulta->bindParam(":fk_municipio", $datosModelo["municipio"], PDO::PARAM_STR);
        
         if($consulta->execute()){
             $resultado ="ok";
         }
         else{
             $resultado = "error";
         }
         return $resultado;
 
         $consulta->close();
 
     }

     #ALTA DE MUNICIPIOS
     static public function registroMunicipioModelo($datosModelo, $tabla)
     {
         //consulta para insertar los datos en la tabla
         $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_municipio,fk_estado) VALUES (:nombre_municipio, :nombre_estado)");
 
         //optenemos los parametros del arreglo
         $consulta->bindParam(":nombre_municipio", $datosModelo["municipio"], PDO::PARAM_STR);
         $consulta->bindParam(":nombre_estado", $datosModelo["estado"], PDO::PARAM_STR);
        
         if($consulta->execute()){
             $resultado ="ok";
         }
         else{
             $resultado = "error";
         }
         return $resultado;
 
         $consulta->close();
 
     }

    #ZONA DE ACTUALIZACIONES 
    #_____________________________________________________________________________
    
    #ACTUALIZAR ESTADO
    static public function actualizarEstadoModelo($datosModelo, $tabla)
    {
       //consulta para insertar los datos en la tabla
       $consulta = Conexion::conectar()->prepare("UPDATE `estado` SET `nombre_estado`=:names WHERE pk_estado = :id");
 
       //optenemos los parametros del arreglo
        $consulta->bindParam(":names", $datosModelo["estado"], PDO::PARAM_STR);
        $consulta->bindParam(":id", $datosModelo["id_estado"], PDO::PARAM_INT);
        $consulta->execute();

       if($consulta->execute()){
           $resultado ="ok";
       }
       else{
           $resultado = "error";
       }
       return $resultado;

       $consulta->close();
    }

    #ACTUALIZAR CARRERA
    static public function actualizarCarreraModelo($datosModelo, $tabla)
    {
       //consulta para insertar los datos en la tabla
       $consulta = Conexion::conectar()->prepare("UPDATE `carrera` SET `nombre_carrera`=:names WHERE pk_carrera = :id");
 
       //optenemos los parametros del arreglo
        $consulta->bindParam(":names", $datosModelo["carrera"], PDO::PARAM_STR);
        $consulta->bindParam(":id", $datosModelo["id_carrera"], PDO::PARAM_INT);
        $consulta->execute();

       if($consulta->execute()){
           $resultado ="ok";
       }
       else{
           $resultado = "error";
       }
       return $resultado;

       $consulta->close();
    }

     #ACTUALIZAR MUNICIPIO
     static public function actualizarMunicipioModelo($datosModelo, $tabla)
     {
        //consulta para insertar los datos en la tabla
        $consulta = Conexion::conectar()->prepare("UPDATE `municipio` SET `nombre_municipio`=:names, `fk_estado`=:estado WHERE pk_municipio = :id");
  
        //optenemos los parametros del arreglo
         $consulta->bindParam(":names", $datosModelo["municipio"], PDO::PARAM_STR);
         $consulta->bindParam(":estado", $datosModelo["estado"], PDO::PARAM_INT);
         $consulta->bindParam(":id", $datosModelo["id_municipio"], PDO::PARAM_INT);
         $consulta->execute();
 
        if($consulta->execute()){
            $resultado ="ok";
        }
        else{
            $resultado = "error";
        }
        return $resultado;
 
        $consulta->close();
     }

       #ACTUALIZAR MUNICIPIO
       static public function actualizarLocalidadModelo($datosModelo, $tabla)
       {
          //consulta para insertar los datos en la tabla
          $consulta = Conexion::conectar()->prepare("UPDATE `localidad` SET `nombre_localidad`=:names, `fk_municipio`=:municipio WHERE pk_localidad = :id");
    
          //optenemos los parametros del arreglo
           $consulta->bindParam(":names", $datosModelo["localidad"], PDO::PARAM_STR);
           $consulta->bindParam(":municipio", $datosModelo["municipio"], PDO::PARAM_INT);
           $consulta->bindParam(":id", $datosModelo["id_localidad"], PDO::PARAM_INT);
           $consulta->execute();
   
          if($consulta->execute()){
              $resultado ="ok";
          }
          else{
              $resultado = "error";
          }
          return $resultado;
   
          $consulta->close();
       }

     #ZONA DE LISTADOS
     #______________________________________________________________________________

     #LISTADO DE ESTADOS
     static public function listadoEstadoModelo($tabla1)
	{
		$consulta = Conexion::conectar()->prepare("SELECT * FROM $tabla1");

		//jejcutamos la consulta
		$consulta->execute();

		//regresamos los registros obtenidos 
		return $consulta->fetchAll();

		//cerramos la conexion a la bd
		$consulta->close();
	}

    #LISTADO DE MUNICIPIOS
    static public function listadoMunicipioModelo($tabla1,$tabla2)
	{
		$consulta = Conexion::conectar()->prepare("SELECT pk_municipio, nombre_municipio, nombre_estado FROM $tabla1,$tabla2 WHERE fk_estado = pk_estado ");

		//jejcutamos la consulta
		$consulta->execute();

		//regresamos los registros obtenidos 
		return $consulta->fetchAll();

		//cerramos la conexion a la bd
		$consulta->close();
	}

    #LISTADO DE LOCALIDADES
    static public function listadoLocalidadModelo($tabla1,$tabla2,$tabla3)
	{
		$consulta = Conexion::conectar()->prepare("SELECT pk_localidad, nombre_localidad, nombre_municipio, nombre_estado FROM $tabla1,$tabla2,$tabla3 WHERE fk_municipio = pk_municipio AND fk_estado = pk_estado ");

		//jejcutamos la consulta
		$consulta->execute();

		//regresamos los registros obtenidos 
		return $consulta->fetchAll();

		//cerramos la conexion a la bd
		$consulta->close();
	}

    #LISTADO DE LOCALIDADES
    static public function listadoCarreraModelo($tabla1)
	{
		$consulta = Conexion::conectar()->prepare("SELECT pk_carrera,nombre_carrera FROM $tabla1 ");

		//jejcutamos la consulta
		$consulta->execute();

		//regresamos los registros obtenidos 
		return $consulta->fetchAll();

		//cerramos la conexion a la bd
		$consulta->close();
	}
}