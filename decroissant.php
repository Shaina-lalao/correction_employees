<?php
    include('../inc/functions.php');
    $tableau_decroissant = ordre_decroissant();
?>
<html>
    <head>
        <title>Departements par ordre decroissant</title>
    </head>
    <body>
    <p><a href="croissant.php">&larr; Inverser l'ordre</a></p>
    <p><a href="index.php">&larr; Retour aux départements</a></p>
    <h1>Departements par ordre decroissant</h1>

    <table border="1">
    <tr>
        <th>Department Number</th>
        <th>Department Name</th>
        <th>Manager actuel</th>
        <th>Nombre d'employés</th>
        <th>Action</th>
    </tr>
    <?php foreach ($tableau_decroissant as $sql) {?>
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
