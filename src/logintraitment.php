<?php
session_start(); // On démarre la session AVANT toute chose

require('function.php');

// LOGIN AS STUDENT
if (isset($_POST['submStudent'])) {
	$LOGIN = $_POST['user'];
	$PASS = $_POST['pass'];
	$LIGNE = intval(getStudent($LOGIN, $PASS));
	if ($LIGNE == 0) {
		// header("location:index.php?userMessager=$LIGNE");
		echo $LIGNE;
	} else {
		$_SESSION['user'] = true;
		// header("location:home.php?");
		
		$ESSION = getStudentElement($LOGIN, $PASS);
		foreach ($ESSION as $_ESSION) {
			
			$_SESSION['nom'] = $_ESSION['nom']; 
			$_SESSION['postnom'] = $_ESSION['postnom'];
			$_SESSION['prenom'] = $_ESSION['prenom'];
			$_SESSION['date_naiss'] = $_ESSION['date_naiss'];
			$_SESSION['email'] = $_ESSION['email'] ;
		}

		$LIGNE = 1;
		echo $LIGNE;
	}
	// if (!$_SESSION['user']){
	// 	header("location:index.php?");
	// 	exit();
	// }
}

// LOGIN AS LOGIN

if (isset($_POST['login'])) {
                        
    $nom = $_POST['name'] ;
    $postnom = $_POST['postnom'] ;
    $prenom = $_POST['prenom'];
    $lieu_naiss = $_POST['lieu'] ;
    $date_naiss = $_POST['daten'] ;
    $sexe = $_POST['genre'] ;
    $nationalite = $_POST['Nationalite']; 
    $adresse = $_POST['Residence'] ;
                        
    $faculte = $_POST['Faculte'] ;
    $cycle = $_POST['Cyle'] ;
    $promotion = $_POST['promotion'] ;
                    
    $email = $_POST['email']; 
    $password_ = $_POST['password'] ;
	$rest = saveStudent($nom, $postnom, $prenom, $sexe, $lieu_naiss, $date_naiss, $email, $password_, $nationalite, $adresse, $faculte, $cycle, $promotion);

	echo $rest;
}
if (isset($_POST['ask1'])) {
    echo $_SESSION['nom'].' '.$_SESSION['postnom'].' '.$_SESSION['prenom'];
}
if (isset($_POST['ask2'])) {
    echo $_SESSION['date_naiss'];
}
if (isset($_POST['ask3'])) {
    echo $_SESSION['email'];
}
if (isset($_POST['ask4'])) {
    echo $_SESSION['prenom'].' '.$_SESSION['nom'];
}

