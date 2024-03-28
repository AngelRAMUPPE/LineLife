<style>
  #content{
    display: block;
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Registro</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="stylesheet" href="css/iniciar.css">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/Logo2.png" type="images/Logo2.png" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class=""><a href="index.php"><img src="images/Logo2.png" height="50px" width="50px"></a></div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">Inicio</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="iniciar.html">Registro</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="Buscador.php"><img src="images/search-icon.png"></a>
               </li>
            </ul>
         </div>
      </nav>
      <!-- header section end -->
      <hr style="height:5px;border-width:0;color:gray;background-color:gray">
      <!-- banner section start -->
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                            <div class="container">
                                <div class="title">Buscador</div>
                                <div class="user-details">
                                    <form action="Buscador.php" method="GET" id="searchForm">
                                        <div class="input-box">
                                            <span class="details">Codigo</span>
                                            <input type="text" placeholder="Ingresa tu Codigo" required name="ID">
                                        </div>
                                        <div class="button">
                                            <input type="submit" value="Buscar">
                                          </div>
                                    </form>
                                </div>
                              </div>
                              <div class="container">
                                <div class="title">información</div>
                                <div class="user-details">
                                
                                <?php
                                // Retrieve the submitted code from the form
                               if (isset($_GET['ID'])) {
                                  $code = $_GET['ID'];
                                } else {
                                  $code = "";
                                }
                        if (isset($_GET['ID'])) {
                          $code = $_GET['ID'];
                              $dbname = 'id20956155_linelife';
                              $dbuser = 'id20956155_root';  
                              $dbpass = 'LineLife12_'; 
                              $dbhost = 'localhost';  
                            $table = 'datos';

                              $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

                          // Check connection
                          if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                          }

                          $query = "SELECT * FROM $table WHERE ID = '$code'";
                          $result = mysqli_query($conn, $query);

                          // Display the result
                          if (mysqli_num_rows($result) > 0) {
                            // Code found, display the information
                            $row = mysqli_fetch_assoc($result);
                            echo "<div style='font-size: 20px; margin-bottom: 10px; margin-top: 20px;'><span style='font-weight: bold;'>ID: </span>" . $row['ID'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Nombre: </span>" . $row['Nombre'] . "</div>";
                                                      
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Edad: </span>" . $row['Edad'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Teléfono 1: </span>" . $row['Telefono1'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Teléfono 2: </span>" . $row['Telefono2'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Tipo de Sangre: </span>" . $row['TipoSangre'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Peso: </span>" . $row['Peso'] . " kg</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Fecha de Nacimiento: </span>" . $row['FechaNac'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Correo: </span>" . $row['Correo'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Sexo: </span>" . $row['Genero'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Municipio: </span>" . $row['Municipio'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Código Postal: </span>" . $row['CodigoPostal'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Medicamentos: </span>" . $row['Medicamentos'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Alergias: </span>" . $row['Alergias'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Notas: </span>" . $row['Notas'] . "</div>";
                            echo "<div style='font-size: 20px; margin-bottom: 10px;'><span style='font-weight: bold;'>Padecimiento: </span>" . $row['Padecimientos'] . "</div>";

                            echo "<script>showResult();</script>";

                          } else {
                            // Code not found
                            echo "Code not found";
                            echo "<script>showResult();</script>";
                          }

                          mysqli_close($conn);
                        }
                  ?>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image_1"><img src="images/Logo1.png"></div>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
   <!-- banner section end -->

    <!-- Font Awesome Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
    // JavaScript code to check if code is present in the URL
    window.addEventListener('DOMContentLoaded', function() {
      var urlParams = new URLSearchParams(window.location.search);
      var code = urlParams.get('ID');

      if (code) {
        document.getElementById('ID').value = code;
        document.getElementById('content').innerHTML = 'Searching...';

        // Perform an automatic form submission
        document.querySelector('searchForm').submit();
      }
    });
    // JavaScript code to show the result div
    function showResult() {
      document.getElementById('content').style.display = 'block';
    }
  </script>
</body>

</html>