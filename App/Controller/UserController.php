<?php
namespace App\Controller;

use App\Model\UserModel;
use Vendor\Controller\Controller;
use Vendor\Manager\PasswordEncoderManager;

class UserController extends Controller{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->encoder = new PasswordEncoderManager();
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

    public function login()
    {
        $error = "";
        // Récupérer les informations avec $_POST
        if(isset($_POST["Email"]) && isset($_POST["Password"])){
            // Recherche un utilisateur dans la BDD
            $user = $this->userModel->findOneBy(["Email" => htmlspecialchars($_POST["Email"])]);
            // S'il y a un utilisateur je vérifie le password
            if ($user) {
                // Si ok, je le connecte
                if($this->encoder->passwordVerify($_POST["Password"], $user->getPassword())){
                    $_SESSION["user"]->FirstName = $user->getFirstName();
                    $_SESSION["user"]->LastName = $user->getLastName();
                    $_SESSION["user"]->Email = $user->getEmail();

                    $this->redirectToRoute("home");
                } else {
                    $error = "Erreur de Password";
                }
            } else {
                $error = "Cet utilisateur n'existe pas.";
            }
        }

        $this->render("user.login", [
            "error" => $error
        ]);
    }

    public function logout()
    {
        session_destroy();
        $this->redirectToRoute("home");
    }

}