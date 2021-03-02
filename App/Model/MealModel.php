<?php
namespace App\Model;

use Vendor\Model\Model;
use Vendor\Model\Query;

/**
 * @method ReadAll() | Récupère tous les meals
 * @method ReadOne(int $id) | Retourne un meal en fonction de son id
 * @method delete(int $id) | Supprime un meal en fonction de son id
 * @method create($data) | Enregistre un meal dans la BDD
 */
class MealModel extends Query{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "meal";

    // /**
    //  * Récupère un meal
    //  *
    //  * @param int $id
    //  * @return object
    //  */
    // public function getOne(int $id):object
    // {
    //     $statement = "SELECT meal.Id, meal.Name, meal.Photo, meal.Description, meal.QuantityInStock, meal.BuyPrice, meal.SalePrice FROM meal 
    //     WHERE meal.id=$id";

    //     return $this->db->getData($statement,true);
    // }

    // /**
    //  * Récupère tous les articles liés à une catégorie
    //  *
    //  * @param int $id
    //  * @return array
    //  */
    // public function readAllWithCategorie(int $id):array
    // {
    //     return $this->db->getData("SELECT * FROM meal WHERE categorie_id = $id");
    // }

    // /**
    //  * Met à jour un article dans la BDD
    //  *
    //  * @param integer $id
    //  * @param array $data
    //  */
    // public function update(int $id, array $data)
    // {
    //     $statement = "UPDATE meal SET 
    //                     Name = :name,
    //                     Description = :description,
    //                     categorie_id = :categorie_id
    //                     WHERE Id = $id";
        
    //     $this->db->postData($statement, $data);
    // }

    /**
     * Retourne tout les meals 
     *
     * @return array
     */
    public function getAll():array
    {
        $statement = "SELECT * FROM meal ORDER BY id";

        return $this->db->getData($statement);
    }

    // /**
    //  * Récupère l'id du dernier article créé
    //  *
    //  * @return object
    //  */
    // public function getLastId():object
    // {
    //     $statement = "SELECT id FROM article ORDER BY id DESC LIMIT 1";
    //     return $this->db->getData($statement, true);
    // }
}