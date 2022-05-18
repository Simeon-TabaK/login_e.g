<?php
require('connexion.php');


//PART I

function getStudent($email, $password_)
{
    $db = connexiondb();
    $sql = "SELECT DISTINCT
                        email,
						password_
					FROM
                        student 
					WHERE 
                        email = :email AND
                        password_ = :password_ ";

    $req = $db->prepare($sql);
    $req->bindValue(':email', $email);
    $req->bindValue(':password_', $password_);
    $req->execute();
    $PERSON_COUNT = $req->fetchAll();
    return $PERSON_COUNT;
}

function getStudentElement($email, $password_)
{
    $db = connexiondb();
    $sql = "SELECT DISTINCT
                        nom,
                        postnom,
                        prenom,
                        date_naiss,
						email
					FROM
                        student 
					WHERE 
                        email = :email AND
                        password_ = :password_ ";

    $req = $db->prepare($sql);
    $req->bindValue(':email', $email);
    $req->bindValue(':password_', $password_);
    $req->execute();
    $PERSON_COUNT = $req->fetchAll();
    return $PERSON_COUNT;
}

//PART II

function saveStudent($nom, $postnom, $prenom, $sexe, $lieu_naiss, $date_naiss, $email, $password_, $nationalite, $adresse, $faculte, $cycle, $promotion){
    $db = connexiondb();

    $sql = "INSERT INTO 
                student (id_student, nom, postnom, prenom, sexe, lieu_naiss, date_naiss, email, password_, nationalite, adresse, faculte, cycle, promotion) 
            VALUES
            ('', :nom, :postnom, :prenom, :sexe, :lieu_naiss, :date_naiss, :email, :password_, :nationalite, :adresse, :faculte, :cycle, :promotion)";
    try{
        $req = $db->prepare($sql);
        $req->bindValue(':nom', $nom);
        $req->bindValue(':postnom', $postnom);
        $req->bindValue(':prenom', $prenom);
        $req->bindValue(':sexe', $sexe);
        $req->bindValue(':lieu_naiss', $lieu_naiss);
        $req->bindValue(':date_naiss', $date_naiss);
        $req->bindValue(':email', $email);
        $req->bindValue(':password_', $password_);
        $req->bindValue(':nationalite', $nationalite);
        $req->bindValue(':adresse', $adresse);
        $req->bindValue(':faculte', $faculte);
        $req->bindValue(':cycle', $cycle);
        $req->bindValue(':promotion', $promotion);
        $req->execute();
    } catch(PDOException $e){
        if ($e->getCode()==1062){
            return 1062;
        } 
        else {
            throw $e;
            return $e->getMessage();
        }
    }
}


