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
    
    
    <h2>Arvude valimine</h2>
        <!-- Vorm arvude valimiseks -->
        <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="start">Algne arv:</label>
                <input type="number" class="form-control" id="start" name="start" value="<?php echo isset($_GET['start']) ? $_GET['start'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="end">Lõpparv:</label>
                <input type="number" class="form-control" id="end" name="end" value="<?php echo isset($_GET['end']) ? $_GET['end'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="step">Samm:</label>
                <input type="number" class="form-control" id="step" name="step" value="<?php echo isset($_GET['step']) ? $_GET['step'] : '1'; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Genereeri</button>
        </form>

        <?php
        // Funktsioon arvude genereerimiseks vastavalt kasutaja sisendile
        function generate_numbers($start, $end, $step = 1) {
            $numbers = [];
            for ($i = $start; $i <= $end; $i += $step) {
                $numbers[] = $i;
            }
            return $numbers;
        }

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Kasutaja sisendist arvude genereerimine
            if (isset($_GET['start']) && isset($_GET['end']) && isset($_GET['step'])) {
                $start = $_GET["start"];
                $end = $_GET["end"];
                $step = $_GET["step"];
                $numbers = generate_numbers($start, $end, $step);
                echo "<h3>Genereeritud arvud:</h3>";
                echo implode(", ", $numbers);
            }
        }
        ?>
    </div>
<h3>ristkulik</h3>



        <h2>Ristküliku pindala</h2>
        <!-- Vorm arvude valimiseks -->
        <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="length">Pikkus:</label>
                <input type="number" class="form-control" id="length" name="length" value="<?php echo isset($_GET['length']) ? $_GET['length'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="width">Laius:</label>
                <input type="number" class="form-control" id="width" name="width" value="<?php echo isset($_GET['width']) ? $_GET['width'] : ''; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Arvuta pindala</button>
        </form>

        <?php
        // Funktsioon ristküliku pindala arvutamiseks
        function rectangle_area($length, $width) {
            return $length * $width;
        }

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Kasutaja sisendist arvude saamine ja ristküliku pindala arvutamine
            if (isset($_GET['length']) && isset($_GET['width'])) {
                $length = $_GET["length"];
                $width = $_GET["width"];
                $area = rectangle_area($length, $width);
                echo "<h3>Ristküliku pindala:</h3>";
                echo $area;
            }
        }
        ?>


        <h2>Isikukood</h2>
        <!-- Vorm isikukoodi sisestamiseks -->
        <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="personal_code">Sisesta isikukood:</label>
                <input type="text" class="form-control" id="personal_code" name="personal_code" required>
            </div>
            <button type="submit" class="btn btn-primary">Kontrolli</button>
        </form>

        <?php
        // Funktsioon isikukoodi kontrollimiseks
        function validate_personal_code($code) {
            if (strlen($code) !== 11) {
                return "Vigane isikukood!";
            }
            $gender = ($code[0] == '5') ? 'Mees' : (($code[0] == '6') ? 'Naine' : 'Tundmatu');
            $birth_date = substr($code, 5, 2) . '.' . substr($code, 3, 2) . '.' . substr($code, 1, 2);
            return "Sugu: $gender, Sünniaeg: $birth_date";
        }

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['personal_code'])) {
            $personal_code = $_GET['personal_code'];
            $result = validate_personal_code($personal_code);
            echo "<h3>Tulemus:</h3>";
            echo $result;
        }
        ?>









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
