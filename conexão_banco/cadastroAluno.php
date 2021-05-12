<?php
      include ("./cadastroAluno.html");
      if($_POST){
	  $server = "localhost";
	  $user = "root";
	  $password = "";
	  $dataBaseName="3dawfaeterj";
      $conn = mysqli_connect($server,$user,$password,$dataBaseName) or die("connection error: " . $conn->connect_error);
	  $name =$_POST["nome"];
      $email =$_POST["email"];
	  $cpf =$_POST["cpf"];
      $matricula =$_POST["matricula"];
	  $query = mysqli_query($conn,"INSERT INTO alunos (nome, email, cpf, matricula) VALUES ('$name', '$email', '$cpf', '$matricula')");
	  if($query){
		 echo "<br><br>";
		 echo "Cadastro efetudado"; 
	  }
	  else{
		  echo "<br><br>";
		  echo "cadastro não efetuado";
	  }
    }
?>