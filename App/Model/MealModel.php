<?php
namespace App\Model;

use Vendor\Model\Model;

/**
 * @method ReadAll() | Récupère tous les articles
 * @method ReadOne(int $id) | Retourne un article en fonction de son id
 * @method delete(int $id) | Supprime un article en fonction de son id
 * @method create($data) | Enregistre un article dans la BDD
 */
class MealModel extends Model{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "article";

    /**
     * Récupère un article et sa catégorie
     *
     * @param int $id
     * @return object
     */
    public function readOneWithCategorie(int $id):object
    {
        $statement = "SELECT meal.Id, meal.title, article.content, categorie.name FROM article 
        INNER JOIN categorie ON article.categorie_id = categorie.id
        WHERE article.id=$id";

        return $this->db->getData($statement,true);
    }

    /**
     * Récupère tous les articles liés à une catégorie
     *
     * @param int $id
     * @return array
     */
    public function readAllWithCategorie(int $id):array
    {
        return $this->db->getData("SELECT * FROM article WHERE categorie_id = $id");
    }

    /**
     * Met à jour un article dans la BDD
     *
     * @param integer $id
     * @param array $data
     */
    public function update(int $id, array $data)
    {
        $statement = "UPDATE article SET 
                        title = :title,
                        content = :content,
                        categorie_id = :categorie_id
                        WHERE id = $id";
        
        $this->db->postData($statement, $data);
    }

    /**
     * Retourne les 5 articles les plus récents
     *
     * @return array
     */
    public function getLast5():array
    {
        $statement = "SELECT * FROM article ORDER BY id DESC LIMIT 5";

        return $this->db->getData($statement);
    }

    /**
     * Récupère l'id du dernier article créé
     *
     * @return object
     */
    public function getLastId():object
    {
        $statement = "SELECT id FROM article ORDER BY id DESC LIMIT 1";
        return $this->db->getData($statement, true);
    }
}