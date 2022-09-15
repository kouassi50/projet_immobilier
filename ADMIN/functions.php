

<?php

function getConnexion()
{
    return new PDO("mysql:host=localhost;dbname=bd_immogest;charset=utf8", "root", "");
}

function getAllUsers()
{
    $pdo = getConnexion();
    $req = "SELECT * FROM users INNER JOIN id_architecte.id_entreprise
           ON users = id_architecte.id_entreprise";

    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function insertUser($nom,$prenom,$mot_de_passe,$telephone,$matricule,$email,$users_role)
{
    $pdo = getConnexion();
    $req = "INSERT INTO users(nom,prenom,email,telephone,matricule,users_role,password) VALUES(
        :nom,:prenom,:email,:telephone,:matricule,:users_role,:password)";
    $query = $pdo->prepare($req);
    $insert = $query->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'telephone' => $telephone,
        'matricule' => $matricule,
        'users_role' => $users_role,
        'password' => $password,
    ]);
    if ($insert) {
        return true;
    } else {
        return false;
    }
}

function Login($email, $password){
    $pdo = getConnexion();
    $req = "SELECT * FROM users WHERE userName = '$userName' AND password = '$password'";

    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $users = $stmt->fetch(PDO::FETCH_ASSOC);
    return $users;
}

//Table appel_offres
function appel_offres($libelle,$prix,$criteres,$id_chefchantier,$id_architecte)
{
    $pdo = getConnexion();
    $req = "INSERT INTO appel_offres(id_user,libelle,prix,criteres,id_chefchantier,id_architecte) VALUES(
        :id_user,:libelle,:prix,:criteres,:id_chefchantier,:id_architecte)";
    $query = $pdo->prepare($req);
    $insert = $query->execute([
        'id_user' => $id_user,
        'libelle' => $libelle,
        'prix' => $prix,
        'criteres' => $criteres,
        'id_chefchantier' => $id_chefchantier,
        'id_architecte' => $id_architecte,
    ]);
    if ($insert) {
        return true;
    } else {
        return false;
    }
}

//Table cabinet_architecte
function cabinet_architecte($id_user,$nom,$matricule)
{
    $pdo = getConnexion();
    $req = "INSERT INTO cabinet_architecte(id_user,nom,matricule) VALUES(
        :id_user,:nom,:matricule)";
    $query = $pdo->prepare($req);
    $insert = $query->execute([
        'id_user' =>$id_user,
        'nom' => $nom,
        'matricule' =>$matricule,
    ]);
    if ($insert) {
        return true;
    }else{
        return false;
    }

}


//Table chef_chantier
function chef_chantier($id_user,$nom,$prenom,$matricule)
{
    $pdo = getConnexion();
    $req = "INSERT INTO chef_chantier(id_user,nom,prenom,matricule) VALUES(
        :id_user,:nom,:prenom,:matricule)";
    $query = $pdo->prepare($req);
    $insert = $query->execute([
        'id_user' =>$id_user,
        'nom' => $nom,
        'prenom' =>$prenom,
        'matricule' =>$matricule,
    ]);
    if ($insert) {
        return true;
    }else{
        return false;
    }

}




//Table entreprise_immobilier
function entreprise_immobilier($id_user,$nom,$matricule)
{
    $pdo = getConnexion();
    $req = "INSERT INTO entreprise_immobilier(id_user,nom,matricule) VALUES(
        :id_user,:nom,:matricule)";
    $query = $pdo->prepare($req);
    $insert = $query->execute([
        'id_user' =>$id_user,
        'nom' => $nom,
        'matricule' =>$matricule,
    ]);
    if ($insert) {
        return true;
    }else{
        return false;
    }

}



//Table localiser
function localiser($id_user,$date,$prix,$ville,$quartier,$id_agentimmobilier,$id_maison)
{
    $pdo = getConnexion();
    $req = "INSERT INTO localiser(id_user,date,prix,ville,quartier,id_agentimmobilier,id_maison) VALUES(
        :id_user,:prix,:ville,:quartier,:id_agentimmobilier,:id_maison,:NOW()";
    $query = $pdo->prepare($req);
    $insert = $query->execute([
        'id_user' => $id_user,
        'prix' => $prix,
        'ville' => $ville,
        'quartier' => $quartier,
        'id_agentimmobilier' => $id_agentimmobilier,
        'id_maison' => $id_maison,
        'date' => $date,
    ]);
    if ($insert) {
        return true;
    }else{
        return false;
    }

}


//Table maison
function maison($id_user,$numero,$proprietaire,$fichier,$image)
{
    $pdo = getConnexion();
    $req = "INSERT INTO maison(id_user,numero,proprietaire,fichier,images) VALUES(
        :id_user,:numero,:proprietaire,:fichier,:images)";
    $query = $pdo->prepare($req);
    $insert = $query->execute([
        'id_user' => $id_user,
        'numero' => $numero,
        'proprietaire' => $proprietaire,
        'fichier' => $fichier,
        'images' => $images,
    ]);
    if ($insert) {
        return true;
    }else{
        return false;
    }

}



//Table recrute
function recrute($id_user,$id_agentimmobilier,$id_entreprise,$date)
{
    $pdo = getConnexion();
    $req = "INSERT INTO recrute(id_user,id_agentimmobilier,id_entreprise,date) VALUES(
        :id_user,:id_agentimmobilier,:id_entreprise,:NOW()";
    $query = $pdo->prepare($req);
    $insert = $query->execute([
        'id_user' => $id_user,
        'id_agentimmobilier' => $id_agentimmobilier,
        'id_entreprise' => $id_entreprise,
        'date' => $date,
        
    ]);
    if ($insert) {
        return true;
    }else{
        return false;
    }

}


?>