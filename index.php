<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>MINAS VALLEY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/src/styles/index.css">
<link rel="stylesheet" type="text/css" href="/src/styles/carousel.css">
<link rel="shortcut icon" href="img/logo/favicon04.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

body, html {
  height: 100%;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("img/bckp.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}

</style>

<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  
  <div class="w3-display-middle w3-center">
      <img class="w3-image" src="img/logo/2.png">
  </div>

</header>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="https://minasvalley.herokuapp.com/"><img src="img/logo/2.png" width="150" height="26" alt="Minas Valley"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="src/front-end/about.php">Sobre nós</a></li>
          <li><a href="#redes">Nossas redes</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form> 
        <ul class="nav navbar-nav navbar-right">

        <?php

            if(isset($_SESSION["usu_id"])){

              echo "<li><a href='src/front-end/perfil.php'><span class='glyphicon glyphicon-user'></span> Perfil</a></li>";
              echo "<li><a href='src/back-end/logout.php'><span class='glyphicon glyphicon-off'></span> Logout</a></li>";
            }else{

              echo "<li><a href='src/front-end/signup.php'><span class='glyphicon glyphicon-user'></span> Cadastre-se</a></li>";
              echo "<li><a href='src/front-end/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
            }

        ?>

        </ul>
      </div>
    </div>
  </nav>


<div class="w3-content w3-padding" style="max-width:1564px">

    <div class="w3-row-padding" id="about">
        <div class="w3-col l4 12"><br>
        <h2 class="index-tema w3-text-grey w3-padding-16">Descubra as mais promissoras Startups do Brasil e conecte-se</h2><hr>
          <h4 class="index-tema">Somos a plataforma que veio para unir Startups, Colaboradores e Investidores tudo em um só lugar! <p>Mergulhe neste novo mar de experiência conosco</h4><br>

          <h2 class="index-tema-icons w3-text-grey w3-padding-16"><i class="fa fa-check-square-o fa-fw w3-margin-right w3-xxlarge"></i>Networking de projetos?</h2>
          <h2 class="index-tema-icons w3-text-grey w3-padding-16"><i class="fa fa-check-square-o fa-fw w3-margin-right w3-xxlarge"></i>Maiores Startups do Brasil?</h2>
          <h2 class="index-tema-icons w3-text-grey w3-padding-16"><i class="fa fa-check-square-o fa-fw w3-margin-right w3-xxlarge"></i>Investidores mais agressivos do mercado?</h2>

          <!-- <h4 class="index-tema3"><br><br><br><br><br>“Todo mundo começa forte. O sucesso vem para aqueles que têm um compromisso inabalável de continuar assim até o fim. ” –  Howard Schultz, CEO do Startbucks</h4> -->
        </div>

        <section class="galeria">
            <img class="foto" src="img/capa/Startup01Red.jpg">
            <img class="foto" src="img/capa/Startup02Red.jpg">
            <img class="foto" src="img/capa/Escritorio.jpg">
        </section>


  <div class="w3-text-grey w3-padding-16" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Startups em Alta</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Nubank</div>
        <a href='src/front-end/project.php'><img src="img/logs/nubank06.png" alt="House" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Pic Pay</div>
        <img src="img/logs/picpay02.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Vindi</div>
        <img src="img/logs/vindi01.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Rubrik</div>
        <img src="img/logs/rubrik01.png" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Slack</div>
        <img src="img/logs/slack02.png" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Loggi</div>
        <img src="img/logs/loggi01.png" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Wework</div>
        <img src="img/logs/wework01.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">NIO</div>
        <img src="img/logs/nio01.png" alt="House" style="width:99%">
      </div>
    </div>
  </div>

  <div class="w3-text-grey w3-padding-16" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Ideias em Destaque</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/id/pag.jpg" style="width:100%">
      <h3>Pagamento por QR Code</h3>
      <p class="w3-opacity">Startup de Economia</p>
      <p>A Desenfila tem um sistema de hospedagem e de processamento das comandas na nuvem. O mercado Pago acessa essas informações, por meio do QR Code na comanda, e...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/id/robojpg.jpg" style="width:100%">
      <h3>Cachorro Robo</h3>
      <p class="w3-opacity">Startup de Robotica</p>
      <p>Se você é do tipo que acha que ter um bichinho de estimação da muito trabalho ou que não tem muito tempo para cuidar, essa nova ideia pode mudar o seu jeito de pensar...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/id/alo.png" style="width:100%">
      <h3>Alô, quem fala?</h3>
      <p class="w3-opacity">Startup de Dublagem</p>
      <p>O mercado de dublagem vem sofrendo muito com o momento atual devido a pandemia, causada pelo COVID-19. Nossos trabalho foram paralisado, pelo risco de trabalhar em um...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/id/casa.jpg" style="width:100%">
      <h3>Casa Automática</h3>
      <p class="w3-opacity">Startup de Automação Residencial</p>
      <p>A SmartHó vem com um novo produto para mudar como você fica em casa. Trazendo um produto para automatizar a maior parte de sua casa o jeito que você fica em casa nunca mais...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
  </div>

  <div class="w3-text-grey w3-padding-16" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Popular entre os Investidores</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/inv/binance.png" style="width:100%">
      <h3>Binance</h3>
      <p class="w3-opacity">Binance</p>
      <p>A Binance é uma bolsa global de criptomoedas que fornece uma plataforma para a negociação de mais de 100 moedas criptográficas. Desde o início de 2018, a Binance é...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/inv/generalAtlantic.png" style="width:100%">
      <h3>General Atlantic</h3>
      <p class="w3-opacity">General Atlantic</p>
      <p>A General Atlantic é uma empresa americana de growth equity que fornece capital e suporte estratégico para empresas de crescimento global. GA está sediada em New York, New York...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/inv/lactec.png" style="width:100%">
      <h3>Lactec</h3>
      <p class="w3-opacity">Lactec</p>
      <p>Aqui, a inovação está presente em cada projeto, em cada serviço que oferecemos. Somos um dos maiores centros de ciência e tecnologia do país, referência em soluções inovadoras para o setor produtivo – empresas...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/inv/sequoia.png" style="width:100%">
      <h3>Sequoia</h3>
      <p class="w3-opacity">Sequoia</p>
      <p>A Sequoia Capital é uma companhia americana focada em investimentos de capital de risco. Sua sede está localizada em Menlo Park, no Estado da Califórnia. O objetivo da Sequoia Capital é focar os seus...</p>
      <p><button href="src/front-end/sequoia.php" class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
  </div>
  
</div>
</div>

<footer class="w3-padding-32 w3-black w3-center w3-margin-top" id="redes">
    <h5>Nos siga em nossa redes sociais:</h5>
    <div class="w3-xlarge w3-padding-16">
        <a href="https://facebook.com/" target="_blank"><img src="img/socialFavicon/facebook-3-24.png"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="img/socialFavicon/instagram-24.png"></a>
        <a href="https://www.snapchat.com/l/pt-br/" target="_blank"><img src="img/socialFavicon/snapchat-24.png"></a>
        <a href="https://br.pinterest.com/" target="_blank"><img src="img/socialFavicon/pinterest-3-24.png"></a>
        <a href="https://twitter.com/" target="_blank"><img src="img/socialFavicon/twitter-3-24.png"></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src="img/socialFavicon/linkedin-3-24.png"></a>
    </div>
</footer>

</body>
</html>
