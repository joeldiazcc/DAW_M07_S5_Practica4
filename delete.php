<?php

include 'ddbb.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM products WHERE ID = $id"; // Borrar
    $mysqlquery = mysqli_query($connection, $query);
}
echo 'Deleted ', $id;
?>
<a href="index.php">Back</a>
