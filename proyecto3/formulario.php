<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-windt initial-scale=1, shrink-to-fit=no">
</head>

<body>
   <h1>REGISTRO DE EMPLEADOS</h1>

    <p> Ingrese los datos en el formulario: <br></p>
    <form id="registro" name="registro" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h4>Primer empleado</h4>
     <P>Nombre:<input type="text" id="empleN1" name="empleN1"></p>
     <P>Apellido:<input type="text" id="empleA1" name="empleA1"></p>
     <P>Cedula:<input type="text" id="empleC1" name="empleC1"></p>
     <P>Sueldo:<input type="text" id="empleS1" name="empleS1"></p>
     <P>Departamento:<input type="text" id="empleD1" name="empleD1"></p>
     <P>Lugar  de trabajo:<input type="text" id="empleL1" name="empleL1"></p>

    <h4>segundo empleado</h4>
     <P>Nombre:<input type="text" id="empleN2" name="empleN2"></p>
     <P>Apellido:<input type="text" id="empleA2" name="empleA2"></p>
     <P>Cedula:<input type="text" id="empleC2" name="empleC2"></p>
     <P>Sueldo:<input type="text" id="empleS2" name="empleS2"></p>
     <P>Departamento:<input type="text" id="empleD2" name="empleD2"></p>
     <P>Lugar  de trabajo:<input type="text" id="empleL2" name="empleL2"></p>

    <h4>tercer empleado</h4>
     <P>Nombre:<input type="text" id="empleN3" name="empleN3"></p>
     <P>Apellido:<input type="text" id="empleA3" name="empleA3"></p>
     <P>Cedula:<input type="text" id="empleC3" name="empleC3"></p>
     <P>Sueldo:<input type="text" id="empleS3" name="empleS3"></p>
     <P>Departamento:<input type="text" id="empleD3" name="empleD3"></p>
     <P>Lugar  de trabajo:<input type="text" id="empleL3" name="empleL3"></p>
      <input type="submit" id="enviar" name="enviar" value="enviar"/></p>
    </from>
  </body>
</html>

<?php
error_reporting(0);
$empleado[0]=[ 'Nombre'=>$_POST['empleN1'], 'Apellido'=>$_POST['empleA1'], 'Cedula'=>$_POST['empleC1'], 'Sueldo'=>$_POST['empleS1'], 'Departamento'=>$_POST['empleD1'], 'Lugar de trabajo'=>$_POST['empleL1']];
$empleado[1]=[ 'Nombre'=>$_POST['empleN2'], 'Apellido'=>$_POST['empleA2'], 'Cedula'=>$_POST['empleC2'], 'Sueldo'=>$_POST['empleS2'], 'Departamento'=>$_POST['empleD2'], 'Lugar de trabajo'=>$_POST['empleL2']];
$empleado[2]=[ 'Nombre'=>$_POST['empleN3'], 'Apellido'=>$_POST['empleA3'], 'Cedula'=>$_POST['empleC3'], 'Sueldo'=>$_POST['empleS3'], 'Departamento'=>$_POST['empleD3'], 'Lugar de trabajo'=>$_POST['empleL3']];

echo '<h1>RISTRO DE DATOS</h1>';

foreach($empleado as $valor){
  echo '<h3> Nombre: '.$valor['Nombre'].$nombre.'</h3>';
  echo '<h3> Apellido: '.$valor['Apellido'].$apellido.'</h3>';
  echo '<h3> Cedula: '.$valor['Cedula'].$cedula.'</h3>';
  echo '<h3> Sueldo: '.$valor['Sueldo'].$sueldo.'</h3>';
  echo '<h3> Departamento: '.$valor['Departamento'].$departamento.'</h3>';
  echo '<h3> Lugar de trabajo: '.$valor['Lugar de trabajo'].$lugardetrabajo.'</h3>';
  echo '<hr>';
}
?>





