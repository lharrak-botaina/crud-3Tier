<?php
    include ("business/studentBusiness.php");
    $studentBLL= new StudentBLL();
    $data = $studentBLL->GetAllStudents();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>student manager</title>
</head>
<body>
    <div>
        <a href="add.php">add student </a>
        <table>
            <tr>
                <th>id</th>
                <th>first name</th>
                <th>last name</th>
                <th>birthday</th>
                <th></th>
            </tr>
            <?php
                    foreach($data as $value){
            ?>

            <tr>
                <td><?= $value->getId() ?></td>
                <td><?= $value->getFirstName() ?></td>
                <td><?= $value->getLastName() ?></td>
                <td><?= $value->getBirthday() ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $value->getId() ?>">update</a>
                    <a href="delete.php?id=<?php echo $value->getId() ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>