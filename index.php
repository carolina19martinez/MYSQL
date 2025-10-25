<?php
// ---------------------------
// CONFIGURACIÓN DE CONEXIONES
// ---------------------------

// PostgreSQL
$pg_host = "10.0.0.4";
$pg_port = "5432";
$pg_dbname = "postgres"; // <-- cámbialo por tu nombre real
$pg_user = "mmartine15";
$pg_password = "Mmartine1509";

// MySQL
$mysql_host = "10.0.1.4";
$mysql_port = "3306";
$mysql_dbname = "mysql"; // <-- cámbialo por tu nombre real
$mysql_user = "mmartine15";
$mysql_password = "19831972aE";

// ---------------------------
// VALIDAR CONEXIÓN POSTGRESQL
// ---------------------------
$pg_conn = @pg_connect("host=$pg_host port=$pg_port dbname=$pg_dbname user=$pg_user password=$pg_password");

if ($pg_conn) {
    echo "✅ Conexión exitosa a PostgreSQL<br>";
    pg_close($pg_conn);
} else {
    echo "❌ No se pudo conectar a PostgreSQL<br>";
}

// ---------------------------
// VALIDAR CONEXIÓN MYSQL
// ---------------------------
$mysql_conn = @new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_dbname, $mysql_port);

if ($mysql_conn && !$mysql_conn->connect_error) {
    echo "✅ Conexión exitosa a MySQL<br>";
    $mysql_conn->close();
} else {
    echo "❌ No se pudo conectar a MySQL<br>";
}
?>

