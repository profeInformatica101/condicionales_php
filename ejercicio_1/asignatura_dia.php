<?php
    var_dump($_POST);
    $dia = $_POST["asignatura"];
  /** 
switch ($dia) {
    case 'lunes':
        echo "Matemáticas";
        break;
    case 'martes':
            # code...
            echo "Lengua";
            break;
    case 'miercoles':
            echo "conocimiento del medio";
            # code...
            break;
    default:
        # code...
        echo "No existe ese día";
        break;
}*/

if($dia == "lunes"){
    echo "Lengua";
}else if($dia == "martes"){
    echo "Matemáticas";
}else if($dia == "miercoles"){
    echo "Cocina";
}else if($dia == "jueves"){
    echo "Educación Física";
}else if($dia == "viernes"){
    echo "Lengua";
}else{
    echo "error";
}



?>
