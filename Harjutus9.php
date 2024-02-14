<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        
    <?php

    ?>
    

    <h4>nimi</h4>
<form action="#" method="get">
        <p>sisestage nimi</p>
        nimi  <input type="text" name="nimi"><br>
        <input type="submit" value="Tervita!">
    </form>
<?php
  
  $nimi = $_GET['nimi'];
  echo "Tere ".ucfirst(strtolower($nimi));


?>

<h4>punkti asi</h4>
<form action="#" method="get">
        <p>sisestage midagi</p>
        tahed  <input type="text" name="tahed"><br>
        <input type="submit" value="Alusta">
    </form>


<?php

$algtekst = $_GET['tahed'];
$valjastus = "";



for ($i = 0; $i < strlen($algtekst); $i++) {
    $valjastus .= strtoupper($algtekst[$i]) . ".";
}
$output_text = rtrim($valjastus, '.');

echo "Sisend: $algtekst<br>";
echo "Väljund: $valjastus";
?>  
<h4>roppsõna</h4>
<form action="#" method="POST">
        <p>Sisestage Lause</p>
        Lause  <input type="text" name="Lause"><br>
        <input type="submit" value="Tervita!">
    </form>

<?php

$roppsonad = array("noob", "loll", "juut", "türa", "putsi", "vittu", "värdjas", "loll", " idioot");

function asendus($lause, $roppsonad) {
    foreach ($roppsonad as $rop) {
        $asendatud_sonad = str_ireplace($rop, str_repeat('*', strlen($rop)), $lause);
        $lause = $asendatud_sonad;
    }
    return $lause;
}

if (isset($_POST['Lause'])) {
    $lause = $_POST['Lause'];
$ropuvabalause = asendus($lause, $roppsonad);

echo $ropuvabalause;
}




 ?> 
<h3>Emaili loomine</h3>
<form action="#" method="POST">
        <p>Sisestage Eesnimi ja perenimi</p>
        Eesnimi <input type="text" name="eesnimi"><br>
        Perenimi <input type="text" name="perenimi"><br>

        <input type="submit" value="Alusta!">
    </form>

<?php

function loo_email($eesnimi, $perenimi)  {
$eesnimi = strtolower(str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), $eesnimi));
 $perenimi = strtolower(str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), $perenimi));
 
 

 $email =strtolower( $eesnimi. '.' .$perenimi. '@hkhk.edu.ee');
    return $email;
}
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eesnimi']) && isset($_POST['perenimi'])) {
        $eesnimi = $_POST['eesnimi'];
        $perenimi = $_POST['perenimi'];

    $email = loo_email($eesnimi, $perenimi);
    echo "Tulemus email:";
    echo "$email";
}


?> 

    <header>
            <!-- place navbar here -->
        </header>
        <main>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
