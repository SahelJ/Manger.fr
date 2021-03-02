<?php


use App\Controller\HomeController;
use App\Controller\MealController;
use App\Controller\UserController;

if (!empty($_GET["page"])) {
    $page = $_GET["page"];
    } else {
        $page = "home";
    }

    switch ($page) {
        case 'home':
            $home = new HomeController();
            $home->home();
            break;
        case 'listMeal':
            $meal = new MealController();
            $meal->listMeal();
            break;
            // case 'meal':
            //     $article = new ArticleController();
            //     $article->listArticle($_GET["id"]);
            //     break;
            case "registration":
                $user = new UserController();
                $user->signup($_POST);
                break;
            case "login":
                $user = new UserController();
                $user->login($_POST);
                break;
        }











 
/**
 * Créer routing
 * Dans controller proposer des url de base.
 */

/**
 * Au téléchargement si juste back-end envoyer sauvegarde comme ça. Prévoir dans le controller les url des templates à appeler.
 * Ajouter dans notice quelles routes appeler
 * 
 * Si ajout template, adapter template à routing et incorporer les url dans les controller
 * 
 * Si ajout d'autres modules prévoir script qui incorpore les diférrents modules et donc modifier routing et url de pages pour chaque site
 */