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
    
   
<?php
//kuude massiiv
//$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
date_default_timezone_set('Europe/Tallinn');
$paev = date('d');
$kuu = date('n');
$aasta = date('Y');
$tund = date("H");
$minut = date("i");
//kuupäeva väljastamine
echo "kellaeg on: ";
echo $paev.'.'.$kuu.' '.$aasta. " " .$tund. " " . $minut; //22.veebruar2013
?>


 
        <h2>Vanuse arvutamine</h2>
        <!-- Vorm sünniaasta sisestamiseks -->
        <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="birth_year">Sisesta sünniaasta:</label>
                <input type="number" class="form-control" id="birth_year" name="birth_year" required>
            </div>
            <button type="submit" class="btn btn-primary">Arvuta vanus</button>
        </form>

        <?php
        // Funktsioon, mis arvutab vanuse või vanuse, mille saab sellel aastal
        function calculate_age($birth_year, $current_year, $future = false) {
            $age = $current_year - $birth_year;
            if ($future) {
                $age++;
            }
            return $age;
        }

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['birth_year'])) {
            // Kasutaja sisestatud sünniaasta
            $birth_year = $_GET["birth_year"];
            // Hetkeaasta
            $current_year = date("Y");
            // Arvutame vanuse
            $age = calculate_age($birth_year, $current_year);
            // Arvutame vanuse, mille saab sellel aastal
            $age_this_year = calculate_age($birth_year, $current_year, true);

            echo "<h3>Teie vanus on $age aastat.</h3>";
            echo "<h3>Sellel aastal saate $age_this_year aastat vanaks.</h3>";
        }
        ?>
    </div>

    <h2>Vali aastaeg:</h2>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="season">Aastaeg:</label>
        <select name="season" id="season">
            <option value="kevad">Kevad</option>
            <option value="suvi">Suvi</option>
            <option value="sugis">Sügis</option>
            <option value="talv">Talv</option>
        </select>
        <button type="submit">pilt</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['season'])) {
        $season = $_GET['season'];
        switch ($season) {
            case 'kevad':
                echo '<img src="kevad1.jpg" alt="Kevad">';
                break;
            case 'suvi':
                echo '<img src="suvi1.jpg" alt="Suvi">';
                break;
            case 'sugis':
                echo '<img src="sugis1.jpg" alt="Sügis">';
                break;
            case 'talv':
                echo '<img src="talv1.jpg" alt="Talv">';
                break;
            default:
                echo 'Vale sisend!';
                break;
        }
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
