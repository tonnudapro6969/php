<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Harjutus 04</h1>




    <form action="#" method="get">
        arv1 <input type="text" name="j1"><br>
        arv2  <input type="text" name="j2"><br>
        <input type="submit" value="Arvuta!">
    </form>
  
    <?php
    
    if(!empty($_GET["j1"]) && !empty($_GET["j2"]) ){
    

    $arv1 = $_GET['j1'];
    $arv2 = $_GET['j2'];
    $jagamine = $arv1 / $arv2;
    echo 'arv: '.$jagamine;
    
}


      //if ( ! jagamine($_GET) ) {
       // $c = $_GET['c'];
       // $u = 4*$c;
       // echo 'vastus on on' .$u. '<br>';

      
    
      
      ?>


<?php
    //harjutus 4
    //tõnis kdandmaa
    //01.02.24
    
   
    
    


    


    
   // mingi if 0 siis kirjutab  if(!empty($_GET[‘name’])){lause}









?>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>