<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cidadesbase";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Falha de conecxão: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $estado = $_GET["estado"];
	$sql ="SELECT idestado, nome FROM cidade WHERE idestado IN (SELECT id FROM estado WHERE uf='$estado')";
	$resultado = $conn->query($sql);
	if ($resultado->num_rows > 0) {

	while ($linha = mysqli_fetch_assoc($resultado)) {
            
	  echo $linha["nome"];
	}
  }else{
	  echo " Digite um estado válido";
  }
}

?>