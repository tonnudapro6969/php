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
        


 <menu> 
 <a href="Harjutus10.php">Avaleht</a>
<a href="Portfoolio.php">Portfoolio</a>
<a href="Firma.php">Firmast</a>
<a href="Kontakt.php">Kontakt</a>
<p> veebilehekene nsd i dash disak kd </p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, molestiae! Dolor deserunt consectetur nemo nihil dolorum eum ullam vero! Voluptates illum perferendis laudantium reprehenderit, adipisci laboriosam neque saepe ex mollitia?</p>
 </menu>
<h3>veebileht</h3>
<form action="#" method="GET">
    <p>sisestage veebilink</p>
    leht <input type="text" name="leht"><br>
    <input type="submit" value="Otsi!">
</form>

<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    if(is_file($leht.'.php')){
        include($leht.'.php');
    } else {
        echo 'valitud eksisteerib!';
    }
} else {
    echo "valitud ei eksisteeri";
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
