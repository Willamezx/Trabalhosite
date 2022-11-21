<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="servicos.css">
    <title>CakeHub Confeitaria</title>

</head>
<body>
    <header>
        <nav class="navegacao">
            <a href="index.html" class="logo"><img src="img/hubcortadabg.png"></a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.html">Home</a></li>
                <li class="nav-item"><a href="servicos.html">Serviços</a></li>
                <li class="nav-item"><a href="quemsomos.html">Quem Somos</a></li>
                <li class="nav-item"><a href="contato.html">Contatos</a></li>
                <li class="nav-item"><a href="login.html">Login</a></li>
                <li class="nav-item"><a href="logout.php">Sair</a></li>
                   
            </ul>
            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

  <div class="backgroundservico">
  <div class="responsive-container-block inner-container">
    <p class="text-blk section-head-text">Conheça nossos serviços:
    </p>
    <div class="responsive-container-block">
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <a href="carrinho.php" class="casamento"> <img src="img/casamento2.jpg"
              class="team-img" />
            </a>
          </div>
          <p class="text-blk name">Bolos de Casamento

        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <a href="aniversario.php" class="aniversario"> <img src="img/aniversario2.jpg"
              class="team-img" />
            </a>
          </div>
          <p class="text-blk name">Bolos de Aniversário

        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
           <a href="cha.php" class="cha"> <img src="img/cha2.jpg"
              class="team-img" />
           </a>
          </div>
          <p class="text-blk name">Bolos de Chá
          </p>

        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <a href="diversos.php" class="diversos"><img src="img/diversos2.jpg"
              class="team-img" />
          </div>
          <p class="text-blk name">Diversos
          </p>

        </div>
      </div>
    </div>
  </div>
</div>
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