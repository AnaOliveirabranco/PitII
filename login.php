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
      

   </head>
   <body>



    <!-- section xxxx -->
    <section class="p-0">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 100vh ;"  >
                <div class="col-md-4 bg-white ">
                    
                    <form method="post" action="vandor/login.php" class="d-flex justify-content-start align-items-center flex-column p-3" style="gap: 1rem ;">


                        <img class="img-fluid imagempng" src="assets/img/logo.png" loading = "lazy" alt="" style="width:100px ;">
                        <p class="text-center">Acesse sua conta:</p>
                        <p id='resposta'></p>
                        <input type="text" name="usuario" id="usuario"  placeholder="Login:" class="form-control">
                        <input type="text" name="senha" id="senha"  placeholder="Senha:" class="form-control">
                        <button type="button" id="login" class="btn btn-warning btn-block" > Entrar </button>

                    </form>

                </div> <!-- fim col -->
            </div> <!-- fim row -->
        </div> <!-- fim container -->
    </section> <!-- fim section -->





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


<?php    ?>
<script>

var login = sessionStorage.getItem("logado");
// verificar se esta logado
if (login != null){
    location.replace(`index.php`);
}



$('#login').click(function (e) { 
   


    console.log('foit');

    var data = {
   usuario : $("#usuario").val(),
   senha :   $("#senha").val()
    };

    
    $.ajax({
        type: "post",
        url: "vandor/login.php",
        data: data,
        success: function (e) {
            var log = e[0].id;
if (log > 0 )
{
    var nome = e[0].nome;
    var id = e[0].id;

    sessionStorage.setItem('nome', nome);
    sessionStorage.setItem('id', id);
    sessionStorage.setItem('logado', '1');

   location.replace(`index.php`); 


}else{

$('#resposta').html('<p class="text-danger" id="resposta"> Senha ou usuario incorretos </p>')

}

       
        }
    });

    
});



</script>


   </body>
</html>