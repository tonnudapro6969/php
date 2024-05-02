<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
            <h1>Harjutus 133</h1>
            

                
                
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="minu_fail"><br>
                <input type="submit" value="lae fail!">
                </form>
                <?php
                //tonis kandmaa
                if (isset($_FILES['minu_fail'])){
                    $failinimi = $_FILES['minu_fail']['name'];
                    $failituup = $_FILES['minu_fail']['type'];
                    $failinime = $_FILES['minu_fail']['tmp_name'];
                    $failerror = $_FILES['minu_fail']['error'];
                    $jpgpilt = array('image/jpeg', 'image/jpg');
                    if (in_array($failituup, $jpgpilt)){
                        if ($failerror === 0){
                            $faili_nimi = uniqid('', true).'.'.$failinimi;
                            $failkoht = 'pildid/'.$faili_nimi;
                            move_uploaded_file($failinime, $failkoht);
                            echo "Faili laadimine onnestus!";
                            echo "<a href='".$failkoht."'><img src='".$failkoht."' class='img-fluid'/></a>";
                        } else {
                            echo "VIGA tekkis!";
                        }
                    } else {
                        echo "Vale formaat!";
                    }
                }

                ?>
        </div>
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
