
    <table class="generic-table meal-list">
        <caption>Carte du restaurant</caption>
        <tbody>
        <?php foreach($meals as $meal): ?>
            <tr>
                <td><img src="<?= $meal->photo ?>" />
                </td>
                <td>
                    <strong><?= $meal->name ?></strong>
                    </br>
                    <?= $meal->description ?>
                </td>
                <td><strong><?= $meal->saleprice ?> €</strong></td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>
