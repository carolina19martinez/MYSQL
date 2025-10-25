<?php
// --- CONFIGURACIONES DE CONEXIÓN ---
// PostgreSQL
$pg_host = "10.0.0.4";
$pg_port = "5432";
$pg_dbname = "tu_basedatos_postgres"; // 👈 cámbialo por el nombre real
$pg_user = "mmartine15";
$pg_password = "Mmartine1509";

// MySQL
$mysql_host = "10.0.1.4";
$mysql_port = "3306";
$mysql_dbname = "tu_basedatos_mysql"; // 👈 cámbialo por el nombre real
$mysql_user = "mmartine15";
$mysql_password = "19831972aE";

// --- CONEXIÓN A POSTGRESQL ---
$pg_conn = pg_connect("host=$pg_host port=$pg_port dbname=$pg_dbname user=$pg_user password=$pg_password");

if (!$pg_conn) {
    die("❌ Error al conectar a PostgreSQL: " . pg_last_error());
} else {
    echo "✅ Conectado correctamente a PostgreSQL<br>";
}

// --- CONEXIÓN A MYSQL ---
$mysql_conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_dbname, $mysql_port);

if ($mysql_conn->connect_error) {
    die("❌ Error al conectar a MySQL: " . $mysql_conn->connect_error);
} else {
    echo "✅ Conectado correctamente a MySQL<br>";
}

// --- PRUEBAS DE CONSULTA ---
echo "<hr>";

// PostgreSQL: obtener versión
$pg_result = pg_query($pg_conn, "SELECT version();");
if ($pg_result) {
    $pg_row = pg_fetch_row($pg_result);
    echo "Versión de PostgreSQL: " . $pg_row[0] . "<br>";
}

// MySQL: obtener versión
$mysql_result = $mysql_conn->query("SELECT VERSION() AS version");
if ($mysql_result) {
    $row = $mysql_result->fetch_assoc();
    echo "Versión de MySQL: " . $row['version'] . "<br>";
}

// --- CERRAR CONEXIONES ---
pg_close($pg_conn);
$mysql_conn->close();

echo "<hr>🔒 Conexiones cerradas correctamente";
?>
