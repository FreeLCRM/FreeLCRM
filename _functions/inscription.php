<?php
require_once "connect.php";


class Inscription
{

    private $pass;
    private $confirm_pass;
    private $mail;
    private $bdd;

    //On initialise le construct
    public function __construct($pass, $confirm_pass, $mail, $bdd=0)
    {

        // htmlentities convertit les caractères spéciaux en entités HTML pour la sécurité
        $mail  = htmlentities($mail);

        // le this est un pointeur
        $this->setPass($pass);
        $this->setConfirmPass($confirm_pass);
        $this->setMail($mail);
        $this->bdd = Bdd::getPdo();
    }


    //on fait une fonction pour faire les verif
    public function verif()
    {
        $sql = "SELECT
                  mail
                FROM
                  user
                WHERE
                  mail = :mail";

        $requete = $this->bdd->prepare($sql);
        $requete->execute([
            'mail' => $this->mail
        ]);

        $reponse = $requete->fetch();

        if($reponse != null)
        {
            return "L'adresse e-mail est déjà prise";
        }

        //avec strlen on calcul la taille de la string et avec la condition on lui demande que le pseudo soit entre 5 et 20 caractère

            $syntaxe = "#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#";

            //le preg_match effectue une recherche de correspondance
            if(preg_match($syntaxe,$this->mail))
            {

                if($this->pass == $this->confirm_pass)
                {
                    echo("Votre compte viens d'être créé");
                    return true;
                }
                else
                {
                    return "Le mot de passe doit être identique à la confirmation";
                }
            }
            else
            {
                return "L'adresse mail n'est pas conforme";
            }
    }




    public function enregistrement()
    {

        $sql =  "INSERT INTO 
                            user
                            (
                            pass,
                            mail,
                            firstname,
                            lastname,
                            img,
                            lang
                            ) 
                     VALUES
                           (
                            :pass,
                            :mail,
                            'CHANGE_ME',
                            'CHANGE_ME',
                            'CHANGE_ME',
                            'CHANGE_ME'
                            )";

        $requete = $this->bdd->prepare($sql);
        $requete->execute([
            'pass'          => $this->pass,
            'mail'         => $this->mail
        ]);

        return 1;
    }

    public function session()
    {
        $sql = "SELECT
                    id 
                FROM 
                    user 
                WHERE
                mail = :mail ";

        $requete = $this->bdd->prepare($sql);
        $requete->execute([
            'mail'=> $this->mail
        ]);
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['mail'] = $this->mail;

        return 1;
    }

//===========================getter et setter===================================
    // le getter sert à retourné une valeur
    public function getPass()
    {
        return $this->pass;
    }
    // le setter sert à charger la valeur dans la class
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function getConfirmPass()
    {
        return $this->confirm_pass;
    }

    public function setConfirmPass($confirm_pass)
    {
        $this->confirm_pass = $confirm_pass;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }
}
