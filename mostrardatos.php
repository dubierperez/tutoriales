<?php	
$sql= "SELECT * FROM tb_usuario";
$conexion = mysqli_connect("localhost","root","","bd_analizi");
$resultado= $conexion-> query($sql);

echo "<table class='table table-bordered'>";
		echo "<tr>";
		echo "<td width='200px';height='30px';>" . "<b>DOCUMENTO</b>" . "</td>";
		echo "<td width='200px';height='30px';>" . "<b>NOMBRE</b>". "</td>";
		echo "<td width='200px';height='30px';>" . "<b>APELLIDO</b>" . "</td>";
		echo "<td width='200px';height='30px';>" . "<b>FECHA_NACIMIENTO</b>". "</td>";
		echo "<td width='200px';height='30px';>" . "<b>CELULAR</b>" . "</td>";
		echo "<td width='200px';height='30px';>" . "<b>RH</b>". "</td>";

		

		echo "</tr>";

while ($fila=mysqli_fetch_assoc($resultado)) 
{
		echo "<tr>";
		echo "<td width='200px';height='30px';>" . $fila['documento'] . "</td>";
		echo "<td width='200px';height='30px';>" . $fila['nombre'] . "</td>";
		echo "<td width='200px';height='30px';>" . $fila['apellido'] . "</td>";
		echo "<td width='200px';height='30px';>" . $fila['fecha_nacimiento'] . "</td>";
		echo "<td width='200px';height='30px';>" . $fila['celular']. "</td>";
		echo "<td width='200px';height='30px';>" . $fila['rh'] . "</td>";
		echo "</tr>";
}	
echo "</table>";	
?>

 
