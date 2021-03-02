<?php
namespace App\Controller;

use App\Model\MealModel;
use Vendor\Controller\Controller;

// require_once permet de limiter le chargement d'une page à une seule fois. 
// Si celle-ci est déjà appelée sur une autre page, on évite ainsi l'erreur suivante:
// Fatal error: Cannot declare class Database, because the name is already in use

class MealController extends Controller{

    public function __construct()
    {
        $this->articleModel = new MealModel();
    }

    /**
     * Récupère un article avec les informations et l'affiche
     *
     * @param int $id
     */
    public function single(int $id)
    {
        $meal = $this->mealModel->readOneWithCategorie($id);

       $this->render("single", [
           "meal" => $meal,
       ]);
    }

    /**
     * Récupère tous les articles liés à une catégorie et les affiche
     *
     * @param int $id
     */
    public function listMeal(int $id)
    {
        $meals =  $this->mealModel->readAllWithCategorie($id);
        foreach ($meals as $meal) {
            $meal->name = strtoupper($meal->name);
        }

       $this->render("listMeal", ["meals" => $meals]);

    }

    /**
     * Enregistre un nouvel article dans la BDD
     *
     * @param array $data
     */
    // public function createArticle(array $data)
    // {
    //     if (isset($data["title"]) && isset($data["content"]) && isset($data["categorie_id"])) {
    //         $article = $this->encodeChars($data);
    //         $article["user_id"] = $_SESSION["user"]->id;
    //         $this->articleModel->create($article);

    //         $id = $this->articleModel->getLastId()->id;
    //         header("Location: index.php?page=single&id=$id");
    //     }

    //     $categorieModel = new CategorieModel();
    //     $categories = $categorieModel->readAll();
    //     $this->render("createArticle",[
    //         "categories" => $categories
    //     ]);
    // }

    // public function getForm()
    // {
    //     $categorieModel = new CategorieModel();
    //     $categories = $categorieModel->readAll();
    //     $this->render("form.formArticle",[
    //         "categories" => $categories
    //     ]);
    // }

    // public function saveArticle($data)
    // {
    //     $article = $this->encodeChars($data);
    //     $article["user_id"] = $_SESSION["user"]->id;
    //     $this->articleModel->create($article);

    //     $id = $this->articleModel->getLastId()->id;
    //     header("Location: index.php?page=single&id=$id");
    // }
}