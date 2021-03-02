<?php
namespace App\Model;

use Vendor\Model\Model;

/**
 * @method ReadAll() | Récupère tous les meals
 * @method ReadOne(int $id) | Retourne un meal en fonction de son id
 * @method delete(int $id) | Supprime un meal en fonction de son id
 * @method create($data) | Enregistre un meal dans la BDD
 */
class MealModel extends Model{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "meal";

    /**
     * Récupère un meal et sa catégorie
     *
     * @param int $id
     * @return object
     */
    public function readOneWithCategorie(int $id):object
    {
        $statement = "SELECT meal.Id, meal.Name, meal.Photo, meal.Description, meal.QuantityInStock, meal.BuyPrice, meal.SAlePrice FROM meal WHERE meal.Id=$id";

        return $this->db->getData($statement,true);
    }

    /**
     * Récupère tous les meals liés à une catégorie
     *
     * @param int $id
     * @return array
     */
    public function readAllWithCategorie(int $id):array
    {
        return $this->db->getData("SELECT * FROM meal WHERE meal_Id = $id");
    }

    /**
     * Met à jour un meal dans la BDD
     *
     * @param integer $id
     * @param array $data
     */
    public function update(int $id, array $data)
    {
        $statement = "UPDATE meal SET 
                        Name = :Name,
                        Photo = :Photo,
                        Description  = :Description,
                        QuantityInStock = :QuantityInStock,
                        BuyPrice = :BuyPrice,
                        SalePrice = :SalePrice
                        WHERE id = $id";
        
        $this->db->postData($statement, $data);
    }


    /**
     * Récupère l'id du dernier meal créé
     *
     * @return object
     */
    public function getLastId():object
    {
        $statement = "SELECT id FROM meal ORDER BY id DESC LIMIT 1";
        return $this->db->getData($statement, true);
    }
}