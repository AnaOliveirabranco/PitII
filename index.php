<?php  
include 'vandor/conecta.php';
$conn = conectadb();
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="author" content="">
      <meta name="robots" content="index, follow">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <title> </title>
      <link rel="shortcut icon" type="image/png" href="assets/img/favicon.webp">
      
      <link rel="shortcut icon" href="assets/img/favicon.webp">
      <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



   </head>
   <body>



<!-- Nav tabs -->

<nav class="navbar navbar-expand-md navbar-light  navegacao p-0  bg-light  " id="nav-header" style="">
    <div class="container d-flex justify-content-end align-items-center">
      <button class="navbar-toggler navbar-toggler-right border-0 collapsed" type="button" data-toggle="collapse" data-target="#navbar9" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse text-center justify-content-center  collapse" id="navbar9" style="">
        <ul class="navbar-nav d-flex justify-content-center align-items-center " style="">
          <li class="nav-item mx-2">
            <a class="nav-link navbar-brand mr-0 text-white align-self-start imagempng" href="index.php">
              <img src="assets/img/logo.png" alt="" style="
                width: 80px;
                height: 50px;
                padding: 5px;
              ">
            </a>
          </li>

          <li class="nav-item mx-2 text-uppercase  mb-0">  <a class="nav-link text-uppercase" href="index.php">home</a> </li>
     <li class="nav-item mx-2 text-uppercase  mb-0 off" >  <a class="nav-link text-uppercase" href="login.php">login</a> </li>

     <li class="nav-item mx-2 text-uppercase  mb-0 logado" > <i class="fa fa-user" aria-hidden="true"></i> <a  href=""  id='user'></a> </li>
     <li class="nav-item mx-2 text-uppercase  mb-0 logado" > <a id='sair'>Sair</a> </li>


        </ul>
      </div>
    </div>
  </nav>



<!-- section banner -->
<header class="p-0">
    <div class="container h-100 ">
        <div class="row h-100 d-flex justify-content-start align-items-center">
            <div class="col-md-6">
              <h2 class="text-white">
                Chocopaty <br>
               <b style="color: #f3a84d;"> Seu Café quentinho !</b>
              </h2>
            </div> <!-- fim col -->
        </div> <!-- fim row -->
    </div> <!-- fim container -->
</header> <!-- fim section -->





<!-- section produtos -->
<section class="py-5">
    <div class="container">

      <div class="row py-5">
              <div class="col-md-12"><h3 class="text-marrom text-center  text-uppercase"> Conheça nossos produtos.
      </h3>
              </div> <!-- fim col -->
      </div> <!-- fim row -->


        <div class="row d-flex justify-content-center align-items-center" style="gap: 1rem ;">
           

          <?php
$jogador = "SELECT idProd, nome, imagem, valor FROM tbproduto";
$produtos = mysqli_query($conn, $jogador);

foreach ($produtos as $prod ) {
$id = $prod['idProd'];
$nome = $prod['nome'];
$imagem = $prod['imagem'];
$valor = $prod['valor'];

?>

          <div class="col-md-3 col-8  card  py-4 d-flex justify-content-center align-items-center " >
              <h5 class="text-center" style="letter-spacing: 2px;"><?php  echo $nome;  ?> </h5>
              <div class="produto" style="background-image:url('assets/img/produtos/<?php echo $imagem; ?>') ;">
              <img class="img-fluid imagempng invisible" src="assets/img/produtos/box-home.png" loading = "lazy" alt="">
              </div>
              <div class="valor text-center" >    
              <p style="font-size: 2rem ;"> R$ <span style="font-size: 1.5rem ;"><?php  echo $valor;  ?></span> </p>
              </div>
              <a href="produto.php?id=<?php echo $id; ?>" class="btn btn-warning text-white text-uppercase">quero comprar </a>
            </div> <!-- fim col -->

<?php
      }     
?>

        </div> <!-- fim row -->
    </div> <!-- fim container -->
</section> <!-- fim section -->

<!-- section footer -->
<footer class="pt-3 bg-marrom">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
            <img class="img-fluid imagempng " style="width: 120px ;" src="assets/img/logo.png" loading = "lazy" alt="">
            </div> <!-- fim col -->

            <div class="col-md-4">
              <h5>
                Chocopaty <br>
                Seu Café quentinho !
              </h5>

              <p>
<br>
                Garantia e qualide com o Chocopaty café! <br>
                com as melhores promoções de bolos, </br> tortas, cafés 
                chocolates e muito mais !
                 <br>
                 faça o seu pedido e receba em casa! <br>
              </p>


            </div>



<div class="col-md-4">


<h5>
                Formas de Pagamentos:

              </h5>

  <img class="img-fluid imagempng mt-3" src="assets/img/cartao.png" loading = "lazy" alt="">
</div>

        </div> <!-- fim row -->


        <div class="row">
                <div class="col-md-12">
        <p class="text-white text-center" style="font-size: 10px ;">
          trabalho: Ana Patricia
        </p>
                </div> <!-- fim col -->
        </div> <!-- fim row -->

    </div> <!-- fim container -->





</footer> <!-- fim section -->





      <link rel="stylesheet" href="assets/css/style.css" style="">
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/Modernizr.js"></script>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <script src="assets/js/bootstrap.min.js"></script>  
      <script src="assets/js/jquery.waypoints.min.js?ver=1"></script>
      <script src="assets/js/js.cookie.min.js"></script>
      <script src="assets/js/mixitup.min.js"></script>
      <script src="assets/js/jquery.validate.js"></script>
      <script src="assets/js/jquery.mask.min.js"></script>
      <script src="assets/js/jquery.email-autocomplete.js"></script>
      <script src="assets/js/script.js"></script>
      <script src="assets/js/remodal.min.js"></script>


      <link rel="stylesheet" href="assets/css/remodal.min.css" media="screen">
      <link rel="stylesheet" href="assets/css/remodal-default-theme.min.css" media="screen">
      <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
      <!-- <script src="https://teste.sensorialwebhouse.com.br/cookies/politica.js"></script> -->
    



<!-- carocel -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



<script>
var  log = sessionStorage.getItem("logado");
var nome = sessionStorage.getItem("nome");
var id  = sessionStorage.getItem("id");

if (log != null){
  $("#user").text(nome);
  $("#user").attr('href','cliente.php?id='+id);

$('.logado').css('display','block');
$('.off').css('display','none');
}else{
  $('.logado').css('display','none');
  $('.off').css('display','flex');
}

$("#sair").click(function (e) { 
  sessionStorage.clear();
  location.replace(`index.php`);
});




</script>



   </body>
</html>