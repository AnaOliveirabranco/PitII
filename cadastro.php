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



<!-- Nav tabs -->

<?php  
include 'vandor/conecta.php';
$conn = conectadb();
?>




<!-- section banner -->
<div class="my-5 p-0 header-paginas">
    <div class="container h-100 ">
        <div class="row h-100 d-flex justify-content-start align-items-center">
            <div class="col-md-6">
              <h2 class="text-white">
               
              Cadastre-se

              </b>
              </h2>
            </div> <!-- fim col -->
        </div> <!-- fim row -->
    </div> <!-- fim container -->
</div> <!-- fim section -->



<!-- section xxxx -->
<section class="p-0">
    <div class="container ">
        <div class="row py-5 d-flex justify-content-center align-items-center">
            <div class="col-md-8 bg-white p-5" style="border-radius: 26px;">

                       <form name="form" class="form-3" method="post" action="envia.php">
                       <div class="row">
                               <div class="col-md-12">

                               <div class="form-group">
                            <input class="form-control" type="text" name="nome" placeholder="Nome" title="O campo Nome deve ser preenchido" required="">
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email" title="Por favor, preencha com um email válido." required="">
                          </div>

                               </div> <!-- fim col -->
                      
                      <div class="col-md-4">

                      <div class="form-group">
                            <input class="form-control fone" type="text" id="fone" name="telefone" placeholder="Telefone" title="O campo Telefone deve ser preenchido" required="">
                          </div>
                      </div>

                      <div class="col-md-4">
                      <div class="form-group">
                            <input class="form-control" type="text" name="cpf" placeholder="cpf" title="Por favor, preencha com um email válido." required="">
                          </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group">
                            <input class="form-control" type="text" name="cep" placeholder="cep" title="Por favor, preencha com um email válido." required="">
                          </div>
                      </div>
                      
                            </div> <!-- fim row --> 
                       
                     
                         
                         

                         
                       
                         
                          <div class="form-group">
                            <input class="form-control" type="text" name="endereco" placeholder="endereço" title="Por favor, preencha com um email válido." required="">
                          </div>

                        

                          <button type="submit" class="btn btn-warning text-white">cadastrar</button>
                        </form>


            </div> <!-- fim col -->
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






   </body>
</html>