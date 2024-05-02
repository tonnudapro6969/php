<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Harjutus 12</h1>
        <form action="h12.php" method="get">
            <h3>soidu kalkuleerimis asi</h3>
            Algus: <input type="time" name="algus"><br>
            Lopp: <input type="time" name="lopp"><br>
            <input type="submit" value="Arvuta">
        </form>
        <?php
        if (isset($_GET['algus']) && isset($_GET['lopp'])) {
            $algus_aeg = $_GET['algus'];
            $lopp_aeg = $_GET['lopp'];
            if (empty($algus_aeg) || empty($lopp_aeg)) {
                echo "palun taitke";
            } else {
                $start = new DateTime($algus_aeg);
                $lopp = new DateTime($lopp_aeg);
                $erinevus = $start->diff($lopp);
                echo "kokku soidu aeg on: " . $erinevus->format("%h") . " tundi ja " . $erinevus->format("%i") . " minutit";
            }
        } else {
            echo "Sisesta algus ja lopp aeg";
        }
        
        
        
        echo "<br><br><br><br><br><br><br>";
        $mehed = 0;
        $mehedpalk = 0;
        $maxmeespalk = 0;
        $naised = 0;
        $naisedpalk = 0;
        $maxnainepalk = 0;


        $failinimi = 'tootajad.csv';
        if (($csv = fopen($failinimi, "r")) !== FALSE) {
            while (($rida = fgetcsv($csv, filesize($failinimi), ";")) !== FALSE) {
                if (count($rida) >= 3) {
                    $sugu = $rida[1];
                    $palk = $rida[2];

                    if ($sugu == 'm') {
                        $mehed++;
                        $mehedpalk += $palk;
                        $maxmeespalk = max($maxmeespalk, $palk);
                    } elseif ($sugu == 'n') {
                        $naised++;
                        $naisedpalk += $palk;
                        $maxnainepalk = max($maxnainepalk, $palk);
                    }
                }
            }
            fclose($csv);
        }





        if ($mehed > 0) {
            echo "Meeste keskmine palk: " . round($mehedpalk / $mehed, 2) . "<br>";
            echo "Suurim meeste palk: " . round($maxmeespalk, 2) . "<br>";
        }

        if ($naised > 0) {
            echo "Naiste keskmine palk: " . round($naisedpalk / $naised, 2) . "<br>";
            echo "Suurim naiste palk: " . round($maxnainepalk, 2) . "<br>";
        }
        ?>
    





</div>
</body>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
