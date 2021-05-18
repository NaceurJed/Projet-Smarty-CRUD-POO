<?php
/**
 * 
 */
class database
{
	
	private static $_host = "localhost";
	private static $_user = "root";
	private static $_mdp = "";
	private static $_bdd = "ncc";

	

	public static function connexion(){
		try{
			return new pdo("mysql:host=".self::$_host.";port=3308;dbname=".self::$_bdd.";charset=UTF8", self::$_user, self::$_mdp);
		}catch(PDOException $e){
            return $e->getMessage();
        } 
    }

    
}