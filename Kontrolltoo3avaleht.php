<!doctype html>
<html lang="en">
    <head>
        <title>h6</title>
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
   
    
<style>
    /* Carousel styling */
    #introCarousel,
    .carousel-inner,
    .carousel-item,
    .carousel-item.active {
      height: 100vh;
    }

    .carousel-item:nth-child(1) {
      background-image: url('https://media.gq.com/photos/5bc4b85c6f8daa7dae417db4/16:9/w_2560%2Cc_limit/travel-guide-gq-malta.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
    .carousel-item:nth-child(2) {
      background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
    .carousel-item:nth-child(3) {
      background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #introCarousel {
        margin-top: -58.59px;
      }
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 50vh;
      }
    }

    .navbar .nav-link {
      color: #fff !important;
    }

    .maintxt {
            position: relative;
            text-align: center;
            line-height: 4px; 
        }

        .maintxt img, .overlay-text {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        
  </style>

  <!-- Navbar -->
  <div
    class="container">
  



    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
    <div class="container-fluid">
        <a class="navbar-brand nav-link mr-auto" target="_blank" href="Kontrolltoo3avaleht.php">
            <strong>Tkandmaa</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01" >
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <li class="nav-item active ">
                    <a class="nav-link" aria-current="page" href="">Avaleht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Minust</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admin</a>
                </li>
            </ul>
        </div>
    </div>




        <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8 col-centered">
                <div class="maintxt">
                    <span class="overlay-text" style="color: white; font-weight: bold; justify-content-center;">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <h1> Praktika Maltal</h1>
                    <p>Minu välispraktika HKHKs </p>
                      </span>
                </div>
            </div>
        </div>
    </div>



      </div>
    </div>
  </nav>


  </div>
  
  
  <!-- Navbar -->

  <!-- Carousel wrapper -->
  <div id="introCarousel" class=" carousel-fade shadow-2-strong" data-mdb-carousel-init>
    
    <div class="carousel-inner">
      <!-- Single item -->
      <div class="carousel-item active">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center" data-mdb-theme="dark">
              
              
            </div>
          </div>
        </div>
      </div>

      <!-- Single item -->
 
      </div>


      </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
 
  </div>
  <!-- Carousel wrapper -->
</header>
<main>
    



        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 ">
        
        <?php



        ?>
          


          <?php
// $file = "tekst.txt"; // Input text file

// // Read input text file
// $text = file_get_contents($file);

// // Split text into titles and texts
// $parts = explode("\n", $text);

// Iterate over the first 5 parts
// for ($i = 0; $i < min(5, count($parts)); $i++) {
//     // Split title and text
//     list($title, $text) = explode("|", $parts[$i]);

//     // Print title and text
//     echo "<h2>$title</h2>\n<p>$text</p>\n<hr>\n";
// }
$handle = fopen("tekst.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $parts = explode(";", $line);
    echo "<h2>". $parts[0]. "</h2>"; 
    echo "<br>";
    echo "<p>". $parts[1]. "</p>". "<hr>"; 

    }

    fclose($handle);
}

?>

     



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