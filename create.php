<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */


if (isset($_POST['submit']))
{

    require "config2.php";


    try
    {
        $connection = new PDO($dsn, $username, $password, $options);

        $new_user = array(
            "lastname" => $_POST['lastname'],
            "firstname" => $_POST['firstname'],
            "village"  => $_POST['village'],
            "rang" => $_POST['rang'],

        );

        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "shinobi",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    }

    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }

}
?>




<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Ajouter</title>



    <link rel="stylesheet" href="css/style.css">


</head>

<body>

<div class="form-wrapper">
    <h1>Créer un contact</h1>
    <form method="post">
        <div class="form-item">
            <label for="lastname"></label>
            <input type="text" name="lastname" required="required" placeholder="lastname" id="lastname">
        </div>
        <div class="form-item">
            <label for="firstname"></label>
            <input type="text" name="firstname" required="required" placeholder="firstname" id="firstname">
        </div>
        <div class="form-item">
            <label for="village"></label>
            <input type="text" name="village" required="required" placeholder="village" id="village">
        </div>
        <div class="form-item">
            <label for="rang"></label>
            <input type="text" name="rang" required="required" placeholder="rang" id="rang">
        </div>
        <div class="button-panel">
            <input type="submit" name="submit" class="button" title="Sign In" value="submit">
        </div>
    </form>
    <div class="form-footer">
        <a href="index.php">Retour</a>
        <?php
        if (isset($_POST['submit']) && $statement)
        { ?>
            <blockquote><?php echo $_POST['lastname']; ?> Bienvenue au club  <a href="index.php">Retour</a></blockquote>
            <?php
        } ?>
    </div>
</div>



</body>

</html>
