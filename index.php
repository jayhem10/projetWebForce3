<?php
// je démarre une session php
session_start();

require 'controllers/controller.php';
// require 'helper/functions.php';

try {
    
    // Routage
    if (!isset($_GET['action'])) { 
        // si je n'ai pas d'action je redirige par défaut vers la home page
        accueilAction();
    }
    else {
        switch($_GET['action']) {
            // accueil
            case 'accueilAction':
                accueilAction();
            break;


            // page qui sommes-nous
            case 'aboutUs' : 
                aboutUs();
                break;

            case 'EnterTheGame':
                mypageAction();
            break;

            case 'Eshop' : 
                marketAction();
            break;
            // page affichant les infos de l'article par son ID  
            // case 'article' : 
                
            //     articleInfoAction($_GET['id']);
            //     break;



            // case 'logout' : 
            //     logoutAction();
            //     break;
            
            // case 'admin' : 
            //     adminAction();
            //     break;

            // page affichant la liste de tous les articles 
            // case 'articles' : 
            //     articlesAction();
            // break;

            

            /// Si une erreur est renvoyée, l'utilisateur est redirigé vers une page 404

        }
    }
    
}
catch (Exception $e) {
    // Si une erreur est renvoyée, l'utilisateur est redirigé vers une page 404>
    erreurAction($e->getMessage());
}