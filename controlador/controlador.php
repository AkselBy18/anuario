<?php

class Controlador
{
    #LLAMADA A LA PLANTILLA
    #------------------------------
    static public function pagina()
    {
        include "vistas/plantilla.php";
    }

    #LLAMADA A LOS DIVERSOS MODULOS
    #-------------------------------
    static public function enlacesPaginasControlador()
    {
        if(isset($_GET['opcion']))
        {
            $enlace = $_GET['opcion'];
        }
        else
        {
            $enlace = "login";
        }

        $respuesta = Paginas::enlacesPaginasModelo($enlace);

        include $respuesta;
    }

    #ZONA DE ELIMINACIONES
    #_________________________________________________________________________________
    #ELIMINAR UN ESTADO
    static public function borrarEstadoControlador()
    {
        if(isset( $_GET['estado_delete']))
        {
        $estado = $_GET['estado_delete'];
        $tabla = 'estado';
        $respuesta = Modelo::borrarEstadoModelo($tabla,$estado);
        
         // SI LA RESPUESTA ES EXITOSA
         if($respuesta == 'ok')
         {
             ?>
             <center>
             <script>
            Swal.fire({
            title: 'Registro borrado Exitosamente!',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
            })
             </script>
             </center>
             <?php
         }
         // EN CASO DE QUE OCURRA UN ERROR
         else
         {
             ?>
               <script>    
                        Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'Los municipios dependen del estado que desea borrar'
                         })
                         </script>
             <?php
         }

        }
    }
    
    #ELIMINAR UNA LOCALIDAD
    static public function borrarLocalidadControlador()
    {   
        if(isset( $_GET['localidad_delete']))
        {
        $localidad = $_GET['localidad_delete'];
        $tabla = 'localidad';
        $respuesta = Modelo::borrarLocalidadModelo($tabla,$localidad);
        
         // SI LA RESPUESTA ES EXITOSA
         if($respuesta == 'ok')
         {
             ?>
             <center>
             <script>
            Swal.fire({
            title: 'Registro borrado Exitosamente!',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
            })
             </script>
             </center>
             <?php
         }
         // EN CASO DE QUE OCURRA UN ERROR
         else
         {
             ?>
               <script>
                       Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'No se pudo eliminar la localidad'
                         })
                </script>
             <?php
         }

        }
    }

    #ELIMINAR UNA LOCALIDAD
    static public function borrarCarreraControlador()
    {   
        if(isset( $_GET['carrera_delete']))
        {
        $localidad = $_GET['carrera_delete'];
        $tabla = 'carrera';
        $respuesta = Modelo::borrarCarreraModelo($tabla,$localidad);
        
         // SI LA RESPUESTA ES EXITOSA
         if($respuesta == 'ok')
         {
             ?>
             <center>
             <script>
            Swal.fire({
            title: 'Registro borrado Exitosamente!',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
            })
             </script>
             </center>
             <?php
         }
         // EN CASO DE QUE OCURRA UN ERROR
         else
         {
             ?>
               <script>
                       Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'No se pudo eliminar la localidad'
                         })
                </script>
             <?php
         }

        }
    }

    #ELIMINAR UN MUNICIPIO
    static public function borrarMunicipioControlador()
    {   
        if(isset( $_GET['municipio_delete']))
        {
        $municipio = $_GET['municipio_delete'];
        $tabla = 'municipio';
        $respuesta = Modelo::borrarMunicipioModelo($tabla,$municipio);
        
         // SI LA RESPUESTA ES EXITOSA
         if($respuesta == 'ok')
         {
             ?>
             <center>
             <script>
            Swal.fire({
            title: 'Registro borrado Exitosamente!',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
            })
             </script>
             </center>
             <?php
         }
         // EN CASO DE QUE OCURRA UN ERROR
         else
         {
             ?>
               <script>
                        Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'Las localidades dependen del municipio que desea borrar'
                         })
                </script>
             <?php
         }

        }
    }

    #ZONA DE CONSULATAS
    #_________________________________________________________________________________
    
    #LISTADO DE ESTADOS
    static public function consultaEstadoControlador()
    {
        $tabla = 'estado';
        $respuesta = Modelo::consultaEstadoModelo($tabla);
        return $respuesta;
    }

    #OBTENER UN ESTADO EN ESPESIFICO
    static public function obtenerEstadoControlador()
    {
        $estado = $_GET['estado'];
        $tabla = 'estado';
        $respuesta = Modelo::obtenerEstadoModelo($tabla,$estado);
         
        return $respuesta;
    }

    #OBTENER UNA CARRERA EN ESPESIFICO
    static public function obtenerCarreraControlador()
    {
        $carrera = $_GET['carrera'];
        $tabla = 'carrera';
        $respuesta = Modelo::obtenerCarreraModelo($tabla,$carrera);
         
        return $respuesta;
    }

     #OBTENER UN MUNICIPIO EN ESPESIFICO
     static public function obtenerMunicipioControlador()
     {
         $municipio = $_GET['municipio'];
         $tabla = 'municipio';
         $tabla2 = 'estado';
         $respuesta = Modelo::obtenerMunicipioModelo($tabla,$tabla2,$municipio);
          
         return $respuesta;
     }

     #OBTENER UNA LOCALIDAD EN ESPECIFICO
     static public function obtenerLocalidadControlador()
     {
         $localidad = $_GET['localidad'];
         $tabla = 'localidad';
         $tabla2 = 'municipio';
         $tabla3 = 'estado';
         $respuesta = Modelo::obtenerLocalidadModelo($tabla,$tabla2,$tabla3,$localidad);
          
         return $respuesta;
     }

    #LISTADO DE MUNICIPIOS
    static public function consultaMunicipiosControlador()
    {
        $tabla = 'municipio';
        $respuesta = Modelo::consultaMunicipiosModelo($tabla);
        return $respuesta;
    }

    #LISTADO DE LOCALIDADES
    static public function consultaLocalidadControlador()
    {
        $tabla = 'estado';
        $tabla2 = 'localidad';
        $tabla3 = 'municipio';
        $respuesta = Modelo::consultaLocalidadModelo($tabla,$tabla2,$tabla3);
        return $respuesta;
    }

    #ZONA DE ALTAS
    #__________________________________________________________________________________

    #ALTA DE ESTADOS
    static public function registroEstadoControlador()
    {
        if(isset($_POST['estado']))
        {
            // TABLA A INSERTAR DATOS
            $tabla = "estado";
            
            // DATOS DEL FORMULARIO EN ARREGLO
            $datosControlador = array("estado"=>$_POST['estado']);

            // ESPERAMOS LA RESPUESTA DEL MODELO 
            $respuesta = Modelo::RegistroEstadoModelo($datosControlador, $tabla);

            // SI LA RESPUESTA ES EXITOSA
            if($respuesta == 'ok')
            {
                ?>
                <center>
                <script>
                Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Guardado correctamente',
                showConfirmButton: false,
                timer: 1500
                })
                </script>
                </center>
                <?php
            }
            // EN CASO DE QUE OCURRA UN ERROR
            else
            {
                ?>
                  <script>
                               Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Ocurrio un error'
                            })
                            </script>
                <?php
            }
        }
    }


    #ALTA DE PERSONAS
    static public function registroPersonaControlador()
    {
        if(isset($_POST['archivo']))
        {
            $archivoTemp = $_FILES['archivo']['tmp_name'];
            $archivoReal = $_FILES['archivo']['name'];
            $tipoArchivo = $_FILES['archivo']['type'];  //video/mp4, video/webm, video/avi, video/mkv
            $tamanio = $_FILES['archivo']['size'];

            
            echo '<script>
            var temporal = "'.$archivoTemp.'";
            alert("temporal: "+temporal);
            </script>';

            echo '<script>
            var real = "'.$archivoReal.'";
            alert("real: "+real);
            </script>';
        
            echo '<script>
            var tipo = "'.$tipoArchivo.'";
            alert("tipo: "+tipo);
            </script>';

            echo '<script>
            var tamanio = "'.$tamanio.'";
            alert("tamanio: "+tamanio);
            </script>';
        }
    }

     #ALTA DE  LOCALIDADES
     static public function registroLocalidadControlador()
     {
         if(isset($_POST['localidad']))
         {
             // TABLA A INSERTAR DATOS
             $tabla = "localidad";
             
             // DATOS DEL FORMULARIO EN ARREGLO
             $datosControlador = array("localidad"=>$_POST['localidad'],"municipio"=>$_POST['municipio']);
 
             // ESPERAMOS LA RESPUESTA DEL MODELO 
             $respuesta = Modelo::registroLocalidadModelo($datosControlador, $tabla);
 
             // SI LA RESPUESTA ES EXITOSA
             if($respuesta == 'ok')
             {
                 ?>
                 <center>
                 <script>
                 Swal.fire({
                 position: 'top-end',
                 icon: 'success',
                 title: 'Guardado correctamente',
                 showConfirmButton: false,
                 timer: 1500
                 })
                 </script>
                 </center>
                 <?php
             }
             // EN CASO DE QUE OCURRA UN ERROR
             else
             {
                 ?>
                   <script>
                                Swal.fire({
                             icon: 'error',
                             title: 'Oops...',
                             text: 'Ocurrio un error'
                             })
                             </script>
                 <?php
             }
         }
     }

    #ALTA DE MUNICIPIOS
    static public function registroMunicipioControlador()
    {
        if(isset($_POST['municipio']))
        {
            // TABLA A INSERTAR DATOS
            $tabla = "municipio";
            
            // DATOS DEL FORMULARIO EN ARREGLO
            $datosControlador = array("municipio"=>$_POST['municipio'],"estado"=>$_POST['estado']);

            // ESPERAMOS LA RESPUESTA DEL MODELO 
            $respuesta = Modelo::registroMunicipioModelo($datosControlador, $tabla);

            // SI LA RESPUESTA ES EXITOSA
            if($respuesta == 'ok')
            {
                ?>
                <center>
                <script>
                Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Guardado correctamente',
                showConfirmButton: false,
                timer: 1500
                })
                </script>
                </center>
                <?php
            }
            // EN CASO DE QUE OCURRA UN ERROR
            else
            {
                ?>
                  <script>
                               Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Ocurrio un error'
                            })
                            </script>
                <?php
            }
        }
    }

     #ALTA DE CARRERAS
     static public function registroCarreraControlador()
     {
         if(isset($_POST['carrera']))
         {
             // TABLA A INSERTAR DATOS
             $tabla = "carrera";
             
             // DATOS DEL FORMULARIO EN ARREGLO
             $datosControlador = array("carrera"=>$_POST['carrera']);
 
             // ESPERAMOS LA RESPUESTA DEL MODELO 
             $respuesta = Modelo::registroCarreraModelo($datosControlador, $tabla);
 
             // SI LA RESPUESTA ES EXITOSA
             if($respuesta == 'ok')
             {
                 ?>
                 <center>
                 <script>
                 Swal.fire({
                 position: 'top-end',
                 icon: 'success',
                 title: 'Guardado correctamente',
                 showConfirmButton: false,
                 timer: 1500
                 })
                 </script>
                 </center>
                 <?php
             }
             // EN CASO DE QUE OCURRA UN ERROR
             else
             {
                 ?>
                   <script>
                                Swal.fire({
                             icon: 'error',
                             title: 'Oops...',
                             text: 'Ocurrio un error'
                             })
                             </script>
                 <?php
             }
         }
     }

     #ZONA DE ACTUALIACIONES 
     #______________________________________________________________________________
      
      #ACTUALIZAR ESTADO
      static public function actualizarEstadoControlador()
      {
          if(isset($_POST['estado']))
          {
              // TABLA A INSERTAR DATOS
              $tabla = "estado";
              
              // DATOS DEL FORMULARIO EN ARREGLO
              $datosControlador = array("id_estado"=>$_POST['id_estado'],"estado"=>$_POST['estado']);
  
              // ESPERAMOS LA RESPUESTA DEL MODELO 
              $respuesta = Modelo::actualizarEstadoModelo($datosControlador, $tabla);
  
              // SI LA RESPUESTA ES EXITOSA
              if($respuesta == 'ok')
              {
                  ?>
                  <center>
                  <script>
                  Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'Actualizado con exito',
                  showConfirmButton: false,
                  timer: 1500
                  })
                  </script>
                  </center>
                  <?php
              }
              // EN CASO DE QUE OCURRA UN ERROR
              else
              {
                  ?>
                    <script>
                                 Swal.fire({
                              icon: 'error',
                              title: 'Oops...',
                              text: 'Ocurrio un error'
                              })
                              </script>
                  <?php
              }
          }
      }

       #ACTUALIZAR CARRERA
       static public function actualizarCarreraControlador()
       {
           if(isset($_POST['carrera']))
           {
               // TABLA A INSERTAR DATOS
               $tabla = "carrera";
               
               // DATOS DEL FORMULARIO EN ARREGLO
               $datosControlador = array("id_carrera"=>$_POST['id_carrera'],"carrera"=>$_POST['carrera']);
   
               // ESPERAMOS LA RESPUESTA DEL MODELO 
               $respuesta = Modelo::actualizarCarreraModelo($datosControlador, $tabla);
   
               // SI LA RESPUESTA ES EXITOSA
               if($respuesta == 'ok')
               {
                   ?>
                   <center>
                   <script>
                   Swal.fire({
                   position: 'top-end',
                   icon: 'success',
                   title: 'Actualizado con exito',
                   showConfirmButton: false,
                   timer: 1500
                   })
                   </script>
                   </center>
                   <?php
               }
               // EN CASO DE QUE OCURRA UN ERROR
               else
               {
                   ?>
                     <script>
                                  Swal.fire({
                               icon: 'error',
                               title: 'Oops...',
                               text: 'Ocurrio un error'
                               })
                               </script>
                   <?php
               }
           }
       }

        #ACTUALIZAR MUNICIPIO
        static public function actualizarMunicipioControlador()
        {
            if(isset($_POST['municipio']))
            {
                // TABLA A INSERTAR DATOS
                $tabla = "municipio";
                
                // DATOS DEL FORMULARIO EN ARREGLO
                $datosControlador = array("id_municipio"=>$_POST['id_municipio'],"municipio"=>$_POST['municipio'],"estado"=>$_POST['estado']);
    
                // ESPERAMOS LA RESPUESTA DEL MODELO 
                $respuesta = Modelo::actualizarMunicipioModelo($datosControlador, $tabla);
    
                // SI LA RESPUESTA ES EXITOSA
                if($respuesta == 'ok')
                {
                    ?>
                    <center>
                    <script>
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Actualizado con exito',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    </script>
                    </center>
                    <?php
                }
                // EN CASO DE QUE OCURRA UN ERROR
                else
                {
                    ?>
                      <script>
                                   Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Ocurrio un error'
                                })
                                </script>
                    <?php
                }
            }
        }

     #ACTUALIZAR MUNICIPIO
     static public function actualizarLocalidadControlador()
     {
         if(isset($_POST['id_localidad']))
         {
             // TABLA A INSERTAR DATOS
             $tabla = "localidad";
             
             // DATOS DEL FORMULARIO EN ARREGLO
             $datosControlador = array("id_localidad"=>$_POST['id_localidad'],"municipio"=>$_POST['municipio'],"localidad"=>$_POST['localidad']);
 
             // ESPERAMOS LA RESPUESTA DEL MODELO 
             $respuesta = Modelo::actualizarLocalidadModelo($datosControlador, $tabla);
 
             // SI LA RESPUESTA ES EXITOSA
             if($respuesta == 'ok')
             {
                 ?>
                 <center>
                 <script>
                 Swal.fire({
                 position: 'top-end',
                 icon: 'success',
                 title: 'Actualizado con exito',
                 showConfirmButton: false,
                 timer: 1500
                 })
                 </script>
                 </center>
                 <?php
             }
             // EN CASO DE QUE OCURRA UN ERROR
             else
             {
                 ?>
                   <script>
                                Swal.fire({
                             icon: 'error',
                             title: 'Oops...',
                             text: 'Ocurrio un error'
                             })
                             </script>
                 <?php
             }
         }
     }

     #ZONA DE LISTADOS
     #______________________________________________________________________________

     #LISTADO DE ESTADOS
     static public function listadoEstadoControlador()
	{
		$respuesta = Modelo::listadoEstadoModelo("estado");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr style="background-color: #519259; color: #fff; text-transform: capitalize;">
					<td style="background-color: #519259; color: #fff; text-transform: capitalize;"><?php echo $valores['pk_estado']; ?></td>
					<td><?php echo $valores['nombre_estado']; ?></td>
                    <td><a href="index.php?opcion=editar_estado&estado=<?php echo $valores['pk_estado'] ?>"><button class="botones-tabla-editar"> <i class="fa-solid fa-pen-to-square"></i></button></a></td>
                    <td><a href="index.php?opcion=mostrar_estado&estado_delete=<?php echo $valores['pk_estado'] ?>"><button class="botones-tabla-borrar" id="borrar"><i class="fa-solid fa-trash"></i></button></a></td>
				</tr>
			<?php
		}
	}

    #LISTADO DE MUNICIPIOS
    static public function listadoMunicipioControlador()
	{
		$respuesta = Modelo::listadoMunicipioModelo("municipio","estado");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr style="background-color: #519259; color: #fff; text-transform: capitalize;">
					<td style="background-color: #519259; color: #fff; text-transform: capitalize;"><?php echo $valores['pk_municipio']; ?></td>
					<td><?php echo $valores['nombre_municipio']; ?></td>
                    <td><?php echo $valores['nombre_estado']; ?></td>
                    <td><a href="index.php?opcion=editar_municipio&municipio=<?php echo $valores['pk_municipio'] ?>"><button class="botones-tabla-editar"> <i class="fa-solid fa-pen-to-square"></i></button></a></td>
                    <td><a href="index.php?opcion=mostrar_municipio&municipio_delete=<?php echo $valores['pk_municipio'] ?>"><button class="botones-tabla-borrar"><i class="fa-solid fa-trash"></i></button></a></td>
				</tr>
			<?php
		}
	}

    #LISTADO DE LOCALIDADES
    static public function listadoLocalidadControlador()
	{
		$respuesta = Modelo::listadoLocalidadModelo("localidad","municipio","estado");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr style="background-color: #519259; color: #fff; text-transform: capitalize;">
					<td style="background-color: #519259; color: #fff; text-transform: capitalize;"><?php echo $valores['pk_localidad']; ?></td>
                    <td><?php echo $valores['nombre_localidad']; ?></td>
					<td><?php echo $valores['nombre_municipio']; ?></td>
                    <td><?php echo $valores['nombre_estado']; ?></td>
                    <td><a href="index.php?opcion=editar_localidad&localidad=<?php echo $valores['pk_localidad'] ?>"><button class="botones-tabla-editar"> <i class="fa-solid fa-pen-to-square"></i></button></a></td>
                    <td><a href="index.php?opcion=mostrar_localidad&localidad_delete=<?php echo $valores['pk_localidad'] ?>"><button class="botones-tabla-borrar"><i class="fa-solid fa-trash"></i></button></a></td>
				</tr>
			<?php
		}
	}

     #LISTADO DE CARRERAS
     static public function listadoCarreraControlador()
     {
         $respuesta = Modelo::listadoCarreraModelo("carrera");
 
         foreach ($respuesta as $renglon => $valores) 
         {
             ?>
                 <tr style="background-color: #519259; color: #fff; text-transform: capitalize;">
                     <td style="background-color: #519259; color: #fff; text-transform: capitalize;"><?php echo $valores['pk_carrera']; ?></td>
                     <td><?php echo $valores['nombre_carrera']; ?></td>
                     <td><a href="index.php?opcion=editar_carrera&carrera=<?php echo $valores['pk_carrera'] ?>"><button class="botones-tabla-editar"> <i class="fa-solid fa-pen-to-square"></i></button></a></td>
                     <td><a href="index.php?opcion=mostrar_carrera&carrera_delete=<?php echo $valores['pk_carrera'] ?>"><button class="botones-tabla-borrar"><i class="fa-solid fa-trash"></i></button></a></td>
                 </tr>
             <?php
         }
     }

}