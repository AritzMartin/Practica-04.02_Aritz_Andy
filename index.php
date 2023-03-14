<?php
	$db_host="localhost";
	$db_user="root";
	$db_password="";
	$db_name="basic_form";
	$db_table_name="basic_data";
// Realizamos la conexión con la base de datos
$db_connection = new mysqli($db_host, $db_user,
                            $db_password, $db_name);
$db_connection->set_charset("utf8");

// Comprobamos si la conexión ha sido exitosa
if ($db_connection){

}else{
    echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
 }
// Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["nombre"], $_POST["email"],
          $_POST["mensaje"]) and $_POST["nombre"] !="" and
          $_POST["email"]!="" and $_POST["mensaje"]!="" ){

    // Traspasamos a variables locales, para evitar complicaciones con las comillas:
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    // Preparamos la orden SQL
    $consulta = "INSERT INTO $db_table_name (id,nombre,email,mensaje) VALUES ('0','$nombre','$email','$mensaje')";
    // Realizamos la consulta
    $db_response = $db_connection->query($consulta);
    if ($db_response) {
        header('Location: Success.html');
    } else {
        header('Location: Fail.html');
    }


} else {
    echo '<p>Por favor, complete el <a href="index.html">formulario</a></p>';
}

?>
