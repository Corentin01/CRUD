<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<table class="table" border="1" cellspacing="0" cellpadding="2" >
    <thead class="tableau">
    <tr>
        <th> Nom </th>
        <th> Prénom </th>
        <th> Village </th>
        <th> Rang </th>
        <th>Action</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include('config.php');
    $result = $db->prepare("SELECT * FROM shinobi ORDER BY id DESC");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
        ?>
        <tr class="record">
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['village']; ?>|<img style="width: 20px;height: 20px;" src="<?php echo $row['image']; ?>" alt="image"></td>
            <td><?php echo $row['rang']; ?></td>
            <td><a href="editform.php?id=<?php echo $row['id']; ?>"> edit </a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>"> Supprimer </a></td>

        </tr>
        <?php
    }
    ?>
    <a href="create.php">Ajouter</a>
    </tbody>
</table>
