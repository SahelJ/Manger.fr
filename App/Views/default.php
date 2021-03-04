<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manger.fr</title>
    <link rel="stylesheet" href="asset/css/3wa-resto.css">
    <link rel="stylesheet" href="asset/css/ui-button.css">
    <link rel="stylesheet" href="asset/css/ui-form.css">
    <link rel="stylesheet" href="asset/css/ui-table.css">

</head>

<body>
    <header>
        <h1>
            <a href="/index.php">
                <img src="../img/logo.png" height="63" width="57" alt="3WA Restaurant">Restaurant - Made In America !
            </a>
        </h1>
        <nav class="user-interface">
            <ul class="link-list">
        <?php if(array_key_exists("user", $_SESSION)): ?>
        
                <li>
                    <a class="button button-primary" href="booking">Réserver</a>
                    <a class="button button-primary" href="order">Commander</a>
                </li>
                <li class="layout-right">
                    <a class="button button-primary" href="logout">Déconnexion</a>
                </li>

            <?php else: ?>

                <li>
                    <a class="button button-primary" href="index.php?page=registration">Créer un compte</a>
                </li>
                <li class="layout-right">
                    <a class="button button-primary" href="index.php?page=login">Connexion</a>
                </li>

            <?php endif; ?>
            </ul>
        </nav>
    </header>
    
    <main>
        <div class="container">
            <?= $content ?>
        </div>
    </main>
    
    <footer>
    <ul class="link-list">
        <li><img src="../img/payment/visa.png" alt="Visa"></li>
        <li><img src="../img/payment/mastercard.png" alt="MasterCard"></li>
        <li><img src="../img/payment/paypal.png" alt="PayPal"></li>
    </ul>
    </footer>
</body>

</html>