<?php
require_once "connect.php";

class Connexion
{

    //attribut privée
    private $mail;
    private $pass;
    private $bdd;

    /**
     * Connexion constructor.
     * @param $mail
     * @param $pass
     * @param $bdd
     */

    public function __construct($mail, $pass, $bdd=0)
    {
        $this->mail = $mail;
        $this->pass = $pass;
        $this->bdd = Bdd::getPdo();
    }


    public function verif()
    {
        $sql = "SELECT mail, pass FROM user WHERE mail = :mail";

        $requete = $this->bdd->prepare($sql);

        $requete->execute([
            'mail' => $this->mail

        ]);

        $reponse = $requete->fetch();
        if ($reponse) {
            if (($_POST['pass']) === $reponse['pass']) {
                return true;
            } else {
                return "Mot de passe incorrect";
            }
        } else {
            return "Aucun compte avec cette adresse mail n'a été trouvé";
        }

    }

    public function session()
    {
        $requete = $this->bdd->prepare("SELECT id FROM user WHERE mail = :mail");
        $requete->execute(array('mail' => $this->mail));
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['mail'] = $this->mail;

        return 1;
    }


//    --------------GETTER AND SETTERS--------------

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }
}