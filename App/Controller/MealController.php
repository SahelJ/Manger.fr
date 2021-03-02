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
        $this->mealModel = new MealModel();
    }

    // /**
    //  * Récupère un meal avec les informations de la catégorie liée et l'affiche
    //  *
    //  * @param int $id
    //  */
    // public function single(int $id)
    // {
    //     $meal = $this->mealModel->readOneWithCategorie($id);
    //     // $commentModel = new CommentModel();
    //     // $comments = $commentModel->readAllFrommeal($id);

    //    $this->render("single", [
    //        "meal" => $meal,
    //        "comments" => $comments
    //    ]);
    // }

    /**
     * Récupère tous les meals liés à une catégorie et les affiche
     *
     * @param int $id
     */
    public function listMeal()
    {
        $meals =  $this->mealModel->findAll();
        foreach ($meals as $meal) {
            $meal->Name = strtoupper($meal->Name);
            
        }

    

       $this->render("home", ["meals" => $meals]);

    //    $articles =  $this->articleModel->readAllWithCategorie($id);
    //    foreach ($articles as $article) {
    //        $article->title = strtoupper($article->title);
    //    }

    //   $this->render("listArticle", ["articles" => $articles]);

    }

    // /**
    //  * Enregistre un nouvel meal dans la BDD
    //  *
    //  * @param array $data
    //  */
    // // public function createmeal(array $data)
    // // {
    // //     if (isset($data["title"]) && isset($data["content"]) && isset($data["categorie_id"])) {
    // //         $meal = $this->encodeChars($data);
    // //         $meal["user_id"] = $_SESSION["user"]->id;
    // //         $this->mealModel->create($meal);

    // //         $id = $this->mealModel->getLastId()->id;
    // //         header("Location: index.php?page=single&id=$id");
    // //     }

    // //     $categorieModel = new CategorieModel();
    // //     $categories = $categorieModel->readAll();
    // //     $this->render("createmeal",[
    // //         "categories" => $categories
    // //     ]);
    // // }

    // public function getForm()
    // {
    //     $categorieModel = new CategorieModel();
    //     $categories = $categorieModel->readAll();
    //     $this->render("form.formmeal",[
    //         "categories" => $categories
    //     ]);
    // }

    // public function savemeal($data)
    // {
    //     $meal = $this->encodeChars($data);
    //     $meal["user_id"] = $_SESSION["user"]->id;
    //     $this->mealModel->create($meal);

    //     $id = $this->mealModel->getLastId()->id;
    //     header("Location: index.php?page=single&id=$id");
    // }
}