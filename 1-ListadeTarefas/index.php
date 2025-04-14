<?php
session_start();																	

if(isset($_SESSION['tarefas'])){													
if(isset($_POST['tarefa'])){															
	array_push($_SESSION['tarefas'], $_POST['tarefa']);				
}
} else {																				
	$_SESSION['tarefas'] = [];														
	if(isset($_POST['tarefa'])){														
	array_push($_SESSION['tarefas'], $_POST['tarefa']);		
}
}

?>

<!DOCTYPE html>																			
<html lang= "pt-br">																	
<head>
    <title>TaskFlow</title>															
</head>

<center>  																				
<h1 style = "color: green"> Bem Vindo ao TaskFlow </h1> 								
</center> 
  
<body>
<form method="post">																	
  
    <label for="tarefa"> Tarefas:</label> 												
    <input id="tarefa" name="tarefa"/>													
    <button type="submit">Salvar</button> 												
</form>
<?php
	$tarefas = $_SESSION['tarefas'];													
	foreach($tarefas as $tarefa){														
		echo $tarefa . "<br>";													
	}
?>
</body>
</html>

