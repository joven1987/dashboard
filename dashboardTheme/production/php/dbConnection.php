<?php
try {
    $db = new PDO("mysql: host=localhost; dbname=flockers", 'root', 'ambunganz071587');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo 'Something went wrong!' . $e->getMessage();
}
?>