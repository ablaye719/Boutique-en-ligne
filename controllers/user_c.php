<?php 
class User
{   
	private $instanceModelUser;
    public function __construct(){
        include("models/user_m.php");
        $this->instanceModelUser = new User_m();
    }
    public function index()  
    {
        include("views/v_head.php");
        include('views/v_menu.php');
        if(isset($_SESSION['erreur']))
          echo '<p style="color:red">'.$_SESSION['erreur'].'</p>';
        include('views/v_user_connexion.php');
        //echo "<br><br>tableau _SESSION :<br><pre>";
        //print_r($_SESSION);
        echo "</pre>";
        include("views/v_foot.php");
    }
    public function connexionUser()  
    {
       
        unset($_SESSION['roles']);
        unset($_SESSION['erreur']);
        unset($_SESSION['username']);

        $data=$this->instanceModelUser->verif_login_mdp_Utilisateur($_POST['login_utilisateur'],$_POST['password_utilisateur']);
        if($data != NULL)
        {
            $_SESSION['roles']=$data[0]['roles'];
            $_SESSION['username']=$data[0]['username'];
          //  header("Location: ".BASE_URL."app.php/User");
        }
        else
        {
            $_SESSION['erreur']='mot de passe ou login incorrect';
           
        }
        print_r($_SESSION);print_r($data);
        header("Location: ".BASE_URL."app.php/User");
    }
    public function deconnexionUser()  
    {
        unset($_SESSION['roles']);
        unset($_SESSION['erreur']);
        unset($_SESSION['username']);
        header("Location: ".BASE_URL."app.php/User");
    }
} 
