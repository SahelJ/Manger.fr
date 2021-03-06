<?php
namespace App\Model;


use Vendor\Model\DbInterface;
use Vendor\Model\Query;


/**
 * @method ReadAll() | Récupère tous les utilisateurs
 * @method ReadOne(int $id) | Retourne un utilisateur en fonction de son id
 * @method delete(int $id) | Supprime un utilisateur en fonction de son id
 * @method create($data) | Enregistre un utilisateur dans la BDD
 */
class UserModel extends Query{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "user";

    /**
     * Récupère un utilisateur en fonction de son email
     *
     * @param string $email
     * @return object
     */
    public function getFirstName(string $firstname):object
    {
        $statement = "SELECT * FROM user WHERE  = '$firstname'";
        return $this->db->getData($statement, true);
    }

    
    public function saveUser($data)
    {
        try {
            $save = new DbInterface();
            $save->save($data, "user");
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }



    // /**
    //  * Récupère un utilisateur en fonction de son email
    //  *
    //  * @param string 
    //  * @return object
    //  */
    // public function insert($pdo, $table, $columns, $values){

    //     if (!is_array($columns) || !is_array($values)) return;

    //     $bindValues = [];
    //     for ($i = 0; $i < count($values); $i++) {
    //         $bindValues[] = ':value' . $i;
    //     }

    //     $strBindValues = implode(', ', $bindValues);
    //     $strColumns = implode(', ', $columns);

    //     $sql = 'INSERT INTO ' . $table . ' (' . $strColumns . ') VALUES (' . $strBindValues . ')';
    //     $query = $pdo->prepare($sql);
    //     for ($i = 0; $i < count($values); $i++) {
    //         $query->bindValue(':value' . $i, $values[$i]);
    //     }
    //     $query->execute();
    // }

    //  /**
    //  * 
    //  */
    // public function insert($data)
    // {
    //     $statement = "INSERT INTO comments (title, content, article_id) VALUES (:title, :content, :article_id)";
    //     $this->db->postData($statement, $data);
    // }











}