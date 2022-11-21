<?php
include('protect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>CakeHub :: Pedido</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="carrinho.css">

</head>

<body>
  <header>
    <nav class="navegacao">
        <a href="index.html" class="logo"><img src="images/hubcortadabg.png"></a>
        <ul class="nav-menu">
            <li class="nav-item"><a href="index.html">Home</a></li>
            <li class="nav-item"><a href="servicos.php">Serviços</a></li>
            <li class="nav-item"><a href="quemsomos.html">Quem Somos</a></li>
            <li class="nav-item"><a href="contato.html">Contatos</a></li>
            <li class="nav-item"><a href="login.php">Login</a></li>
            
        </ul>
        <div class="menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>
<h2 class="titule-menu">Seção de bolos de chá </h2>
  <div class="corpo_pedido">
    
    <div class="carrinho-container">
      <div class="carrinho_element">
      <?php

      $itens = array (['image'=>'images/cake1.png', 'nome' => 'Quantidade de Andares' ,'preco'=>'150.00'],
                      ['image'=>'images/cake2.png', 'nome' => 'Recheio de Brigadeiro' ,'preco'=>'79.80'],
                      ['image'=>'images/cake3.png', 'nome' => 'Recheio de Ninho ' ,'preco'=>'88.90'],
                      ['image'=>'images/cake4.png', 'nome' => 'Recheio de Nutella' ,'preco'=>'180.00'],
                      ['image'=>'images/cake5.png', 'nome' => 'Recheio de Morango' ,'preco'=>'110.00'],
                      ['image'=>'images/cake5.png', 'nome' => 'Pasta Americana' ,'preco'=>'100.00'],
                      ['image'=>'images/cake5.png', 'nome' => 'Naked Cake' ,'preco'=>'100.00'],
                      ['image'=>'images/cake5.png', 'nome' => 'Glacê' ,'preco'=>'100.00'],
                      ['image'=>'images/cake5.png', 'nome' => 'Confete' ,'preco'=>'27.00'],
                    );
      foreach($itens as $key => $value){
  ?> 
      <div class="produto">
        <img src="<?php echo $value['image'] ?>" />
        <p><?php echo $value['nome']?></p>
        <p><?php echo '<p>Preço: '.$value['preco'].'</p>'?></p>
        <a href="?adicionar=<?php echo $key ?>">Adicionar</a>

      </div><!--produto-->
    <?php
      }
      ?>
    </div><!--carrinho container-->
    
    <div>
    
    <?php
    if(isset($_GET['adicionar'])){
      //vamos adicionar ao carrinho.
      $idProduto = (int) $_GET['adicionar'];
      if(isset($itens[$idProduto])){
        if(isset($_SESSION['carrinho'][$idProduto])){
            $_SESSION['carrinho'][$idProduto]['quantidade']++;
        }else{
            $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1, 'nome'=>$itens[$idProduto]['nome'],
            'preco'=>$itens[$idProduto]['preco']);
        }
        echo '<script>alert("O item foi adicionado ao carrinho.");</script>';
      }else{
        die('Voce não pode adicionar um item que não existe.');
      }
    }

  ?>
    </div>
    <div class="carrinho_pedido">
      <h2 class="title_carrinho">Carrinho</h2>

      <?php
      foreach ($_SESSION['carrinho'] as $key => $value) {
        //nome do produto
        //quantidade
        //preço
        //echo '<div class="carrinho-item">';
        //echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: '.($value['quantidade']*$value['preco']).'</p>';
        //echo '</div>';
?>
        <div class="carrinho-item">
        <a href="?remover=<?php echo $key ?>"><img src="images/lixo.png"/></a>
            <div class="nome_preco">
                <h2><?php echo $value['nome']?></h2>

                <?php $preco = $value['preco']*$value['quantidade']; ?>
                <p>R$ <?php echo number_format($preco,2,',',','); ?></p>
            </div>

          <p2><?php echo $value['quantidade']?></p2>
          
        </div>
        <?php
      }
      ?>
<?php
    if(isset($_GET['remover'][$idProduto])) {
      $idProduto = (int) $_GET['remover'];
      if(isset($_SESSION['carrinho'][$idProduto]))
      {
        unset($_SESSION['carrinho'][$idProduto]);
      }
    }

    if ($_GET['finalizar']){
      unset($_SESSION['carrinho']);
    }
?>
    <div class="total">
      

      <h2>Total<p1>R$
        <?php
          $total=500;
          foreach($_SESSION['carrinho'] as $key => $value){
            
            $total += $value['preco']*$value['quantidade'];
          }
          echo number_format($total,2,',','.');

         ?></p1></h2>

      <a href="?finalizar=<?php echo $key ?>"><button>Finalizar</button></a>
    </div>
    </div>
  </div>
</div>
  
  <section>
    <footer id="back_rodape">
           <div>
            <iframe id="tam_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.199054513716!2d-38.577112249150986!3d-3.766816144411635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c01797285bb%3A0xa8888be05f940563!2sCentro%20Universit%C3%A1rio%20Est%C3%A1cio%20-%20Campus%20Parangaba!5e0!3m2!1spt-BR!2sbr!4v1664723815168!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p> Av. Senador Fernandes Távora, 137 - Jóquei Clube</p>
            <p>Fortaleza - CE, 60510-111</p>
           </div>
           <div>
            <img class="tamanho_estacio" src="images/estacio.png"> 
           </div>
           
    </footer>
</section>
  <script src="./script/script.js"></script>

</body>

</html>