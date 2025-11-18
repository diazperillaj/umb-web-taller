<?php
// 1. Conexión
$conexion = mysqli_connect(
    "ep-odd-cell-a8bgkgk1-pooler.eastus2.azure.neon.tech", 
    "neondb_owner", 
    "npg_HmZkbh7ig9Nf", 
    "neondb"
);

// 2. Validación de conexión
if (mysqli_connect_errno()) {
     echo "Error al conectar a MySQL: " . mysqli_connect_error();
     exit();
}

// NOTA: Explicar que la extensión 'mysql_' (ej: mysql_query) está obsoleta
// y que siempre se debe usar 'mysqli_' o PDO.
?>