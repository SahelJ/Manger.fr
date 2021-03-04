<?php
namespace App\Controller;

use App\Model\UserModel;
use Vendor\Controller\Controller;


class UserController extends Controller{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function signup($data)
    {
        // var_dump($data);
        if (isset($data["Email"])) {
            $user["Password"] = password_hash($data["Password"], PASSWORD_DEFAULT);
            $user["FirstName"] = htmlspecialchars($data['FirstName']);
            $user["LastName"] = htmlspecialchars($data['LastName']);
            $user["BirthDate"] = htmlspecialchars($data['BirthDate']);
            $user["Email"] = htmlspecialchars($data['Email']);
            $user["Address"] = htmlspecialchars($data['Address']);
            $user["City"] = htmlspecialchars($data['City']);
            $user["ZipCode"] = htmlspecialchars($data['ZipCode']);
            $user["Country"] = htmlspecialchars($data['Country']);
            $user["Phone"] = htmlspecialchars($data['Phone']);
            $this->userModel->save($user);

            header("Location:index.php?page=login");
            // var_dump($user);
        }
        $this->render("user.signup");

    }

    public function login($data)
    {
        if (isset($data["Email"])) {

            $user = $this->userModel->getUserByEmail($data["Email"]);

            if ($user && password_verify($data["Password"], $user->password)) {
                $_SESSION["user"] = $user;
                $_SESSION["user"]->role = json_decode($user->role);
                header("Location:index.php");
            } else {
                $error = "Utilisateur ou mot de passe incorrect.";
            }
            
        }
        $this->render("user.login");

    }

    public function logout()
    {
        session_destroy();
        header("Location:index.php");
    }

}