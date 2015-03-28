<?php
class AlumnoControlador extends Alumno {


  public function guardarDatos(&objAlumno) {

   $variablesql = "INSERT INTO alumnos.alumno ";
   $variablesql .= "(id,nombre,apellido,fecha_nacimiento, ";
   $variablesql .= "direccion,carnet)";
   $variablesql .= "VALUES (";
   $variablesql .="'".$objAlumno[0]."',";
   $variablesql .="'".$objAlumno[1]."',";
   $variablesql .="'".$objAlumno[2]."',";
   $variablesql .="'".$objAlumno[3]."',";
   $variablesql .="'".$objAlumno[4]."',";
   $variablesql .="'".$objAlumno[5]."');";

   $bandera = msql_query($variablesql);

     if (bandera) {
     	$msg ="Datos almacenados";

     }else{

     $msg ="error al almacenar los datos # de error: ";
     $msg .= mysql_ermo();
     $msg .="<br>";
     $msg .=mysql_error();
    }

    return $msg;

}