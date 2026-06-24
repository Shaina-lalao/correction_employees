<?php
    include('../inc/functions.php');
    $tableau_croissant = ordre_croissant();
?>
<html>
    <head>
        <title>Departements par ordre croissant</title>
    </head>
    <body>
    <p><a href="decroissant.php">&larr; Inverser l'ordre</a></p>
    <h1>Departements par ordre croissant</h1>

    <table border="1">
    <tr>
        <th>Department Number</th>
        <th>Department Name</th>
        <th>Manager actuel</th>
        <th>Nombre d'employés</th>
        <th>Action</th>
    </tr>
    <?php foreach ($tableau_croissant as $sql) {?>
        <tr>
            <td><a href="employees.php?dept_no=<?= urlencode($sql['dept_no']) ?>"><?= $sql['dept_no']?></a></td>
            <td><?=$sql['dept_name']?></td>
            <td><?= $sql['manager_name'] ?? '—' ?></td>
            <td><?= $sql['nb_employees'] ?></td>
            <td><a href="dept_form.php?dept_no=<?= urlencode($sql['dept_no']) ?>">Éditer</a></td>
        </tr>
    <?php } ?>
    </table>
    </body>
</html>
