<head>
		<title>Confeitaria Cake Hub</title>
		<meta charset="utf-8"/>
			<link rel="stylesheet" type="text/css" href="css/login.css">
			<link rel="stylesheet" type="text/css" href="css/login.css">
			<script type="text/javascript">
                function redirectTime(){
                 
                	window.location = "servicos.php"
        		
        		
        		}
</script>
</head>
<?php
session_start();
if(!$conexao)
	include ('conexao.php');

if( empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email']) || empty($_POST['endereco'])|| empty($_POST['cep'] )){
        
    header('Location: cadastro.html');
    exit();        
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];


$in = mysqli_query($conexao,"insert into usuarios (usuario,senha,email,endereco,cep) values ('$usuario',('$senha'),'$email', '$endereco', '$cep')") or die("Erro ao conectar ao BD");

?>

<body onLoad="setTimeout('redirectTime()', 1000)">
<h2>Cadastro realizado com sucesso.</h2>