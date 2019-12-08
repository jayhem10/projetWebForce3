



<!-- A FAIRE !!!!!!!!!!!!!!!!!!!!!!!!! -->


<?php

// Connexion a la BDD 
require 'connectbdd.php';



// function connexionUser($email, $password) {

//     $bdd = getBdd();
    
//     // je verifie si l'e-mail est présent en BDD 
//     $query = $bdd->prepare('SELECT * 
//                             FROM user 
//                             WHERE usr_email = ?');

//     // j'execute ma requete 
//     $query->execute([
//         $email
//     ]);
 
//     $user = $query->fetch(PDO::FETCH_ASSOC);

//     // si j'ai un utilisateur corresspondant à l'email 
//     if ($user) {

//         // je vérifie si le MDP tapé correspond à la clé de hashage 
//         $verify = password_verify($password, $user['usr_password']);

//         if ($verify) {
//             // connecté
//             unset($user['usr_password']);

//             // je stock les infos user dans une variable de session 
//             $_SESSION['user'] = $user;

//             // je retourne les infos utilisateur 
//             return $user;
//         }
//         else {
//             // je retourne false si le password est inccorect 
//             return false;
//         }
//     }
//     else {
//         // je retourne false si l'e-mail n'est pas enregistré en BDD 
//         return false;
//     }

// }


