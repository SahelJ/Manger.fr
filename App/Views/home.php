
    <table class="generic-table meal-list">
        <caption>Carte du restaurant</caption>
        <tbody>
            <?php foreach($meals as $meal): ?>
                <tr>
                    <td>
                        <img src="../img/meals/<?= $meal->Photo ?>" />
                    </td>
                    <td>
                        <strong><?= $meal->Name ?></strong>
                        </br>
                        <?= $meal->Description ?>
                    </td>
                    <td>
                        <strong><?= $meal->SalePrice ?></strong>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
