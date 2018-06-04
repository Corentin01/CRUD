<?php

// configuration
include('config.php');

// new data
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE  FROM shinobi
    		WHERE id=?";
    $q = $db->prepare($sql);
    $q->execute(array($id));
    header('Location:index.php');
}
?>