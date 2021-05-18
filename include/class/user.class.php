<?php
/**
 * 
 */
class user
{
	private $id;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $poids;
    private $sport;
    private $pseudo;
    private $email;
    private $password;
    private $date_inscription;
	
	public static function build($nom, $prenom, $pseudo, $email, $date_naissance, $password, $poids, $sport, $id=null, $date_inscription=null ){
        $obj = new static;
        $obj->id               = $id;
        $obj->nom              = $nom;
        $obj->prenom           = $prenom;
        $obj->pseudo           = $pseudo;
      	$obj->email            = $email;
        $obj->date_naissance   = $date_naissance;
        $obj->poids 		   = $poids;
        $obj->sport 		   = $sport;
        $obj->password         = $password;
        $obj->date_inscription = $date_inscription;
        return $obj;
        }

    /**** GETTER / SETTER ****/
    public function __get($key){
        return $this->$key;
    }
    public function __set($key, $value){
        $this->$key = $value;
    }

    //création d'un nouveaux users
    public function creer(){
        
        $sql = "INSERT INTO `users` (nom, prenom, pseudo, mail, date_naissance, password, poids, sport) VALUES (:nom, :prenom, :pseudo, :email, :date_naissance, :password, :poids, :sport);";
        $conn = database::connexion();
        $req = $conn->prepare($sql);
        $req->bindValue(":nom", $this->nom);
        $req->bindValue(":prenom", $this->prenom);
        $req->bindValue(":pseudo", $this->pseudo);
        $req->bindValue(":email", $this->email);
        $req->bindValue(":date_naissance", $this->date_naissance);
        $req->bindValue(":password", password_hash($this->password, PASSWORD_DEFAULT));
        $req->bindValue(":poids", $this->poids);
        $req->bindValue(":sport", $this->sport);
        return $req->execute();
    }

    public static function authentification($email, $password)
        {
            $conn = database::connexion();
            $sql = "SELECT * FROM `users` WHERE `mail`= ?";
            $req = $conn->prepare($sql);
            $req->execute([$email]);
            if($req->rowCount() == 0){
                return null;
            }

            $req->setFetchMode(PDO::FETCH_CLASS, 'user');
            
            $user = $req->fetch();

            if(password_verify($password, $user->password)){
                return $user;
            } else {
                return null;
            }
        }
    
    public function modifier(){
            $conn = database::connexion();
            $sql = "UPDATE `users` SET `mail` = :email, `poids` = :poids, `sport` = :sport WHERE `id` = :id;";
            $req = $conn->prepare($sql);
            $req->bindValue(":poids", $this->poids);
            $req->bindValue(":sport", $this->sport);
            $req->bindValue(":email", $this->email);
            $req->bindValue(":id", $this->id);
            $req->execute();
        }
}