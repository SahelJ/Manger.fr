<h1>Nom<?= $_GET["id"] ?></h1>

<ul>
    <?php foreach($meals as $meal): ?>
        <li><a href="index.php?page=single&id=<?= $meal->id ?>"><?= $meal->name ?></a></li>
    <?php endforeach; ?>
</ul>