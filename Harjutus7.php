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
//koosta funktsioon, mis tervitab. Näiteks: “Tere päiksekesekene!”
function tervita(){
    return "“Tere päiksekesekene!"; 
    }

echo tervita();

    ?>
    
    
    <p>________________________________________</p>
<h4>uudiskiri</h4>

<form class="row gy-2 gx-3 align-items-center">
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">email</label>
    <input type="text" class="form-control" id="autoSizingInput" placeholder="email">
  </div>

  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
    
<p>________________________________________</p>
<h4>kaustaja nimi ja email</h4>
<?php
function append_string($kasutaja, $emil)
{ 
    $emil = "@hkhk.edu.ee";
    $email = $kasutaja . $emil; 
    return $email; 
} 

function randomPassword()
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';
    $length = 7;
    
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $password;
}

function kasutaja($kasutaja = "Kasutaja")
{
    $lowerkasutaja = strtolower($kasutaja);
    $email = append_string($lowerkasutaja, ""); // Call append_string with empty $emil
    
    $password = randomPassword();
    
    return $email . " <br> " . $password; // Concatenate email and password
}

echo kasutaja("JohnDoe");



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
