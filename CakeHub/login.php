<?php
include('conexao_login.php');

if(isset($_POST['email'])  || isset($_POST['senha']))  {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    }else{
        $email= $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code= "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli -> error);

        $quantidade = $sql_query -> num_rows;
        if($quantidade == 1){
            $usuarios = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['usuario'] = $usuario['usuario'];

           header("Location: servicos.php");
        }else{
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }


}
?>
<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <link rel="stylesheet" href="login.css">
    <title>CakeHub Login</title>

</head>
<body>
    <header>
        <nav class="navegacao">
            <a href="index.html" class="logo"><img src="img/hubcortadabg.png"></a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.html">Home</a></li>
                <li class="nav-item"><a href="servicos.php">Serviços</a></li>
                <li class="nav-item"><a href="quemsomos.html">Quem Somos</a></li>
                <li class="nav-item"><a href="#">Contatos</a></li>
                <li class="nav-item"><a href="login.php">Login</a></li>
                
            </ul>
            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

<div class="bodylogin">
   <div  class="cad_body">
        <div class="container">
            <div class="form-image">
                <img src="img/login1.png">
            </div>
            <div class="form">
                <form action="" method="POST">
                    <div class="form-header">
                        <div class="title">
                            <h1>Login</h1>
                        </div>
                        <div class="login-button">
                            <button><a href="cadastro.html">Cadastre-se</a></button>
                        </div>
                    </div>

                    <div class="input-group">

                        <div class="input-box">
                            <label for="email">Email</label>
                            <input id="email" type="text" name="email" placeholder="   Digite seu email" required>
                        </div>

                        <div class="input-box">
                            <label for="password">Senha</label>
                            <input id="senha" type="password" name="senha" placeholder="   Digite sua senha" required>
                        </div>
               
                    </div>

                    <div class="continue-button">
                        <button type="submit">Continuar</a></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

   </div>
<a href="index.html" class="abs-site-link" rel="nofollow noreferrer" target="_blank">CakeHub</a>
</div>


  <!-- Footer da pagina -->
  <section>
    <footer id="back_rodape">
           <div>
            <iframe id="tam_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.199054513716!2d-38.577112249150986!3d-3.766816144411635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c01797285bb%3A0xa8888be05f940563!2sCentro%20Universit%C3%A1rio%20Est%C3%A1cio%20-%20Campus%20Parangaba!5e0!3m2!1spt-BR!2sbr!4v1664723815168!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p> Av. Senador Fernandes Távora, 137 - Jóquei Clube</p>
            <p>Fortaleza - CE, 60510-111</p>
           </div>
           <div>
            <img class="tamanho_estacio" src="img/estacio.png"> 
           </div>
           
    </footer>
</section>
  
    <script src="script.js"></script>
</body>
</html>