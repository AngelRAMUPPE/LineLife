<?php
    // Assuming you have already set up a database connection
    $dbname = 'id20956155_linelife';
    $dbuser = 'id20956155_root';  
    $dbpass = 'LineLife12_'; 
    $dbhost = 'localhost'; 
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $nombre = $_POST['Nombre'];
  $edad = $_POST['Edad'];
  $telefono1 = $_POST['Telefono1'];
  $telefonoEmergencia = $_POST['Telefono2'];
  $tipoSangre = $_POST['sangre'];
  $peso = $_POST['Peso'];
  $fechaNacimiento = $_POST['Fecha'];
  $correo = $_POST['Correo'];
  $contrasena = $_POST['contraseña'];
  $genero = $_POST['Genero'];
  $municipio = $_POST['Municipio'];
  $codigoPostal = $_POST['CodigoPostal'];
  $medicamentos = $_POST['Medicamentos'];
  $alergias = $_POST['Alergias'];
  $notas = $_POST['Notas'];
  $padecimientos = $_POST['padecimiento'];

  // Insert the data into the database
  $query = "INSERT INTO datos (Nombre, Edad, Telefono1, Telefono2, TipoSangre, Peso, FechaNac, Correo, Contraseña, Genero, Municipio, CodigoPostal, Medicamentos, Alergias, Notas, Padecimientos) 
            VALUES ('$nombre', '$edad', '$telefono1', '$telefonoEmergencia', '$tipoSangre', '$peso', '$fechaNacimiento', '$correo', '$contrasena', '$genero', '$municipio', '$codigoPostal', '$medicamentos', '$alergias', '$notas', '$padecimientos')";
  
  // Execute the query
  if (mysqli_query($conn, $query)) {
    $message = "Creado exitosamente!"; // The message you want to display

    echo "<script>";
    echo "alert('$message');"; // Display the message using an alert dialog
    echo "</script>";
  } else {
    // Error in inserting data
    echo "<script>";
    echo "alert(ERROR);"; // Display the message using an alert dialog
    echo "</script>";
  }

  // Close the database connection
  $conn->close();
}
?>
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
   <title>Line Life</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
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
                           <h1 class="banner_taital">LINE <br><span style="color: #151515;">LIFE</span></h1>
                           <p class="banner_text">Medical Bracelet</p>
                           <div class="btn_main">
                              <div class="contact_bt"><a href="iniciar.html">Registrate</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/LogoSL.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
   <!-- banner section end -->
   <!-- health section start -->
   <section class="hero">
        <div class="container">
            <h2>Gestiona tus datos medicos con nuestra plataforma de salud</h2>
            <p>Regístrate ahora y accede a herramientas para gestionar tus datos médicos de forma segura y eficiente.</p>
            <a href="iniciar.html" class="btn">Regístrate</a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2>Características principales</h2>
            <div class="feature">
                <i class="fas fa-clipboard-check"></i>
                <h3>Registro Fácil</h3>
                <p>Crea tu cuenta en pocos minutos y registra tu información médica de manera rápida y sencilla.</p>
            </div>
            <div class="feature">
                <i class="fas fa-search"></i>
                <h3>Búsqueda de Códigos</h3>
                <p>Encuentra códigos de diagnóstico y procedimientos médicos de forma ágil y precisa.</p>
            </div>
            <div class="feature">
                <i class="fas fa-globe"></i>
                <h3>Acceso desde cualquier lugar</h3>
                <p>Accede a tu perfil y a tus datos médicos desde cualquier dispositivo con conexión a internet.</p>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2>Contáctanos</h2>
            <p>Si tienes alguna pregunta o sugerencia, no dudes en contactarnos. Estamos aquí para ayudarte.</p>
            <a href="#" class="btn">Contacto</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 Tu Página de Salud. Todos los derechos reservados.</p>
        </div>
    </footer>

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
</body>

</html>