<?php
include('config.php');
$id=$_GET['id'];
$result = $db->prepare("SELECT * FROM shinobi WHERE id= :userid");
$result->bindParam(':userid', $id);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
    ?>
    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        First Name<br>
        <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" /><br>
        Last Name<br>
        <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" /><br>
        First Name<br>
        <input type="text" name="village" value="<?php echo $row['village']; ?>" /><br>
        Last Name<br>
        <input type="text" name="rang" value="<?php echo $row['rang']; ?>" /><br>
        First Name<br>
        <input type="submit" value="Save" />
    </form>
    <?php
}
?>
