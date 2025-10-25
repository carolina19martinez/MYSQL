<?php
// ==== CONFIGURACIÓN DE CONEXIÓN MYSQL ====

$host = 'your-mysql-server.mysql.database.azure.com';  // Ejemplo: midb.mysql.database.azure.com
$dbname = 'your_database_name';                        // Nombre de la base de datos
$username = 'youruser@your-mysql-server';              // Usuario (con @servidor)
$password = 'yourpassword';                            // Contraseña
$port = 3306;                                          // Puerto MySQL por defecto

try {
    // Crear conexión con PDO
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    echo "✅ Conexión exitosa a MySQL.<br>";

    // Prueba: consulta simple
    $stmt = $pdo->query("SELECT NOW() AS fecha_actual");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "🕒 Fecha actual en el servidor MySQL: " . $row['fecha_actual'];

} catch (PDOException $e) {
    echo "❌ Error al conectar a MySQL: " . $e->getMessage();
    exit;
}
?>
