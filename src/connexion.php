<?php
function connexiondb(){
    $host = "localhost";
    $port = "";
    $dbname = "tuto";
    $user = "root";
    $pass = "";
    try{
        $db = new PDO("mysql:host=localhost;port=3306;charset=utf8;dbname=".$dbname, $user, $pass);
        return $db;
            }
    catch(PDOException $e){
        print("Erreur !: ".$e->getMessage()."<br/>");
        die('Erreur : '.$e->getMessage());
    }
}
?>