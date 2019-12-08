<?php



// ////////////////////////////////////////////////////////////

// COPIER COLLER DE L'EXERCICE !

// A MODIFIER !!!

// /////////////////////////////////////////////////////////////

// require 'models/model.php';
require 'models/model.php';


// Affiche la page d'acceuil
function accueilAction() {
    
    // j'affectue ici mes appel au model si je dois aller chercher des infos en BDD


    // appel de la template 
    require 'views/viewHome.php';
}

// Affiche la page Qui sommes nous
function aboutUs() {
    // j'affectue ici mes appel au model si je dois aller chercher des infos en BDD
    

    // appel de la template 
    require 'views/viewAboutUs.php';
}

// // Affiche la page contact 
// function contactAction() {
//     // pour l'instant pas d'appel en BDD 

//     // appel de la template 
//     require 'views/viewContact.php';
// }





// function loginAction() {

//     // pour tous les user le mot de passe est "admin"

//     if (!empty($_POST)) {
//        $user = connexionUser($_POST['email'], $_POST['password']);

//         if ($user === false) {
//             $erreur = 'Le couple e-mail/password est inccorect.';
//         }
//         else {
//             // l'utilisateur est connecté, je le redirige vers une autre page
//              header('Location: index.php?action=admin');
//         }

//     }

//     require 'views/viewlogin.php';
// }


// function adminAction() {
    
//     // je verifie si l'utilisateur est connecté 
//     adminAccess();

//     require 'views/viewAdmin.php';
// }

// function logoutAction() {

//     // je détruis la session user 
//     session_destroy();

//     // je redirige l'utilisateur vers la page de connexion 
//     header('Location: index.php?action=login');

// }

// // affiche la page article en fonction de son id_article 
// function articleInfoAction($id_article) {
//     // j'affectue ici mes appel au model si je dois aller chercher des infos en BDD
//     $article = getArticleById($id_article);

//     // appel de la template 
//     require 'views/viewArticle.php';
// }

// // affiche tous les articles 
// function articlesAction() {

//     // appel au model pour recuperer la liste des article 
//     $articles = getAllArticles();

//     // appel de la template 
//     require 'views/viewArticleList.php';
// }









// // Affiche une erreur
// function erreurAction($msgErreur) {
//     // appel de la template 
//     require 'views/view404.php';
// }

