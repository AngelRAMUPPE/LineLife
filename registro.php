<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
    // Assuming you have already set up a database connection
    $dbname = 'linelife';
    $dbuser = 'root';  
    $dbpass = ''; 
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
    // Data inserted successfully
    echo "Data inserted successfully.";
  } else {
    // Error in inserting data
    echo "Error: " . mysqli_error($conn);
  }

  // Close the database connection
  $conn->close();
}
?>

</body>
</html>