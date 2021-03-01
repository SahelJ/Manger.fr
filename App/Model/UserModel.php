<?php
namespace App\Model;

use Vendor\Model\Model;

/**
 * @method ReadAll() | Récupère tous les utilisateurs
 * @method ReadOne(int $id) | Retourne un utilisateur en fonction de son id
 * @method delete(int $id) | Supprime un utilisateur en fonction de son id
 * @method create($data) | Enregistre un utilisateur dans la BDD
 */
class UserModel extends Model{

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
    public function getUserByEmail(string $email):object
    {
        $statement = "SELECT * FROM user WHERE Email = '$email'";
        return $this->db->getData($statement, true);
    }

}