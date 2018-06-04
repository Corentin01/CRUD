<?php

// configuration
include('config.php');

// new data
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$village = $_POST['village'];
$rang = $_POST['rang'];
$id = $_POST['id'];
// query
$sql = "UPDATE shinobi
            SET lastname=?,firstname=?,village=?, rang=?
    		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($lastname,$firstname,$village,$rang,$id));
header("location: index.php");

?>
