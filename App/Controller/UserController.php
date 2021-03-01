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
        if (isset($data["Email"])) {
            $user = $this->encodeChars($data);
            $user["Password"] = password_hash($data["Password"], PASSWORD_DEFAULT);
            $user["Role"] = json_encode(['user']);
            $this->userModel->create($user);

            header("Location:index.php?page=login");
        }

        $this->render("auth.signup");

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
        $this->render("auth.login");

    }

    public function logout()
    {
        session_destroy();
        header("Location:index.php");
    }

}