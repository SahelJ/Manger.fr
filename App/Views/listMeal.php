<h1>repas n°<?= $_GET["Id"] ?></h1>

<ul>
    <?php foreach($meals as $meal): ?>
        <li><a href="index.php?page=single&id=<?= $meal->Id ?>"><?= $meal->Name ?></a></li>
    <?php endforeach; ?>
</ul>