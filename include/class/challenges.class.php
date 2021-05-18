<?php

/**
 * 
 */
class challenges
{
	
	public static function chalAccepte($idChal, $idUser)
	{
		$conn = database::connexion();
		$sql = "INSERT INTO `chal_accepte` (id_challenge, id_user) VALUES (?, ?);";
		$req = $conn->prepare($sql);
        $req->execute([$idChal, $idUser]);
	}

	public static function selectChalAcc($idUser)
	{
		$conn = database::connexion();
		$sql = "SELECT id_challenge, id_user, date_chal, nom, image, description FROM `chal_accepte` JOIN `challenges` ON (id = id_challenge) WHERE id_user = ?;";
		$req = $conn->prepare($sql);
		$req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute([$idUser]);
        return $req->fetchAll();
	}

	public static function selectChal($idChal)
	{
		$conn = database::connexion();
		$sql = "SELECT * FROM `challenges` WHERE id_challenge = ?;";
		$req = $conn->prepare($sql);
		$req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute([$idChal]);
        return $req->fetch();
	}
}