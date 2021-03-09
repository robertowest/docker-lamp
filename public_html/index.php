<h1>Hola colega!</h1>
<h4>Intentando conexión MySQL desde php...</h4>

<?php 
$host = 'mysql';
$user = 'root';
$pass = 'roberto';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Conexión rechazada: " . $conn->connect_error);
} 
echo "Conectado a MySQL con éxito!";
?>
