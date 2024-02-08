8899664541132<!doctype html>
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
    <h4>jagamine</h4>




    <form action="#" method="get">
        arv1 <input type="text" name="j1"><br>
        arv2  <input type="text" name="j2"><br>
        <input type="submit" value="Arvuta!">
    </form>
    <?php
    #tõnis kändmaa
    #05.02.24 it-222
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
      <p>_________________________________________________________________________________________________________________________________________________________</p>

<h4>vanuse asi</h4>
<form action="#" method="get">
        <p>sisestage 2 isiku vanus</p>
vanus1 <input type="text" name="vanus1"><br>
        vanus2  <input type="text" name="vanus2"><br>
        <input type="submit" value="Leia vahe!">
    </form>
<?php
    $vanus1 = $_GET['vanus1'];
    $vanus2 = $_GET['vanus2'];
   
 if($vanus1 > $vanus2){
  echo '1. isik on vanem';
  } else if($vanus1 < $vanus2) {
  echo '2. isik on vanem';
  } else if($vanus1 = $vanus2) 
  echo 'Te olete sama vanusega';
   else if ($vanus1 && $vanus2 = 0) {
  echo 'Sisestage vanus';  
  }  

?>

<p>_________________________________________________________________________________________________________________________________________________________</p>
<h4>ristkulik eta ruut</h4>
<form action="#" method="get">
        <p>sisetage küljed</p>
        kulg 1 = <input type="text" name="kulg1"><br>
        kulg 2 = <input type="text" name="kulg2"><br>
        <input type="submit" value="Leia kujund!">
    </form>

<?php
$ristkulikpilt='<img src="harjutus4ristkulik.png"/>';
$ruutpilt='<img src="harjutus4ruut.png"/>';

    $kulg1 = $_GET['kulg1'];
    $kulg2 = $_GET['kulg2'];
   
    if($kulg1 == $kulg2){
      echo 'vastus on ruut';
      echo $ruutpilt;
      } else {
      echo 'vastus on ristkülik';
      echo $ristkulikpilt;
      }
      
?>

<p>_________________________________________________________________________________________________________________________________________________________</p>
<h4>juubel</h4>
<form action="#" method="get">
        <p>sisesta enda vanus</p>
        vanus = <input type="text" name="juubel"><br>
        <input type="submit" value="Leia kujund!">
    </form>

    <?php

    $juubel = $_GET['juubel'];
   
    if($juubel == 0 && 5){
      echo 'teil on juube';
      } else {
      echo 'ei ole';
   
      }
      
?>







<p>_________________________________________________________________________________________________________________________________________________________</p>

<h4>Hinne</h4>
<form action="#" method="get">
  <p>Sisestage kontrolltoo punktid</p>
   KT1 <input type="text" name="KT1"><br>
  <input type="submit" value="saa tulemus teada!">
</form>
<?php
    $KT1 = $_GET['KT1'];
   

  switch($KT1){ 
    case ($KT1 >= 10): echo 'SUPER'; 
    break; 
    case ($KT1 >=5 && $KT1 <= 9): echo 'tehtud'; 
    break; 
    case ($KT1 <= 4 && $KT1 <= 0): echo 'tee uuesti'; 
    break;
    default: echo 'siseta number!'; 
    } 





?>







 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>