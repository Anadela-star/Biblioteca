<?php 

include_once ("Dbm.php");

$objeto=new Manager();

class libreria {
    
function insertar_socios($c_socio,$nombre,$direccion,$conexion){
    $sql=("INSERT INTO socios(c_socio,nombre,direccion,n_librosprestados)
    VALUES('$c_socio','$nombre','$direccion','0') ");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
} 

function insertar_admin($c_admin,$nombre,$direccion,$conexion){
    $sql=("INSERT INTO administradores(c_admin,nombre,direccion)
    VALUES('$c_admin','$nombre','$direccion') ");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
} 

function insertar_i_sesion_admins($c_admin,$usuario,$contraseña,$conexion){
    $sql=("INSERT INTO i_sesion_admin(c_admin,usuario,contraseña)
    VALUES('$c_admin','$usuario','$contraseña') ");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
}

function insertar_sesion_socios($c_socio,$usuario,$contraseña,$conexion){
    $sql=("INSERT INTO isesion_s(c_socio,usuario,contraseña)
    VALUES('$c_socio','$usuario','$contraseña') ");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
}

  function prestarlibro($c_socio,$conexion){
    $sql=("SELECT * FROM socios WHERE c_socio='$c_socio' ");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
 }
 
  function registrarlibroprestado($c_socio,$codigo,$fecha,$fecha_d,$conexion){
    $sql=("INSERT INTO prestar_libros(c_socio,codigo,fecha,fecha_devolucion)
    VALUES('$c_socio','$codigo','$fecha','$fecha_d') ");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }

  function verificardisponibilidad($codigo,$conexion){
    $sql=("SELECT * FROM libro WHERE codigo='$codigo' ");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }

  function modificarestadolibro($codigo,$conexion){
    $sql=("UPDATE libro SET disponibilidad='nodisponible' WHERE codigo='$codigo' AND stock=0");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }

  function restarexistencias($codigo,$conexion){
    $sql=("UPDATE libro SET stock=stock-1 WHERE codigo='$codigo'");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }

  function sumarexistencias($codigo,$conexion){
    $sql=("UPDATE libro SET stock=stock+1, disponibilidad='disponible' WHERE codigo='$codigo'");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }

  function borraregistroprestamo($c_socio,$codigo,$conexion){
    $sql=("DELETE FROM prestar_libros WHERE c_socio='$c_socio' AND codigo='$codigo'");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }

  function sumarlibrosocio($c_socio,$conexion){
    $sql=( "UPDATE socios SET n_librosprestados=n_librosprestados+1 WHERE c_socio='$c_socio' ");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }

  function restarlibrosocio($c_socio,$conexion){
    $sql=( "UPDATE socios SET n_librosprestados=n_librosprestados-1 WHERE c_socio='$c_socio'" );
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }
  
  function mostrarsociosnofiables($conexion){
    $sql=("SELECT * FROM socios WHERE n_librosprestados=10");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }
  function buscarlibrosprestados($c_socio,$conexion){
     $sql=("SELECT * FROM prestar_libros as p INNER JOIN libro as l WHERE p.c_socio='$c_socio' AND p.codigo=l.codigo");
    $rec = mysqli_query($conexion,$sql);
    return $rec;  
  }
  
  function cambiarcontraseña($c_socio,$contraseña,$conexion){
    $sql=("UPDATE isesion_s SET contraseña='$contraseña' WHERE c_socio='$c_socio'");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }
  function actualizarasignacion($codigo,$id_cate,$conexion){
      $sql=("UPDATE libro SET id_cate='$id_cate' WHERE codigo='$codigo'");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
  }
function buscarprestamo($c_socio,$codigo,$conexion){
    $sql=("SELECT * FROM prestar_libros WHERE c_socio='$c_socio' AND codigo='$codigo'");
    $rec = mysqli_query($conexion,$sql);
    return $rec;  
}
function mostrarprestamos($conexion){
   $sql=("SELECT * FROM prestar_libros as p INNER JOIN libro as l ON p.codigo=l.codigo");
    $rec = mysqli_query($conexion,$sql);
    return $rec;  
}

function mostrarsocios($conexion){
    $sql=("SELECT * FROM socios");
    $rec = mysqli_query($conexion,$sql);
    return $rec;  
}

function agregarlibro($codigo,$id_cate,$titulo,$autor,$disponibilidad,$stock,$conexion){
    $sql=("INSERT INTO libro(codigo,id_cate,titulo,autor,disponibilidad,stock)
    VALUES('$codigo','$id_cate','$titulo','$autor','$disponibilidad','$stock') ");
    $rec = mysqli_query($conexion,$sql);
    return $rec;
}

function quitarlibro($codigo,$conexion){
    $sql=("DELETE FROM libro WHERE codigo=$codigo");
    $rec = mysqli_query($conexion,$sql);
    return $rec;  
}
}
?>




