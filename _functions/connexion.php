<?php
require_once "connect.php";

class Connexion
{

    //attribut privée
    private $pseudo;
    private $pass;
    private $bdd;

    public function __construct($pseudo, $pass)
    {

        $this->setPseudo($pseudo);
        $this->setPass($pass);
        $this->bdd = Bdd::getPdo();

    }

    public function verif()
    {
        $sql = "SELECT pseudo, pass FROM panel WHERE pseudo = :pseudo";

        $requete = $this->bdd->prepare($sql);

        $requete->execute([
            'pseudo' => $this->pseudo

        ]);

        $reponse= $requete->fetch();
        if($reponse)
        {
            if(($_POST['pass']) === $reponse['pass'])
            {
                return "ok";
            }
            else
            {
                return "Mot de passe incorrect";
            }
        }
        else
        {
            return "Le pseudo est inexistant";
        }

    }

    public function session()
    {
        $requete = $this->bdd->prepare("SELECT id FROM panel WHERE pseudo = :pseudo");
        $requete->execute(array('pseudo'=> $this->pseudo));
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['pseudo'] = $this->pseudo;

        return 1;
    }
    /*===============================getter et setter================================*/
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }
}
