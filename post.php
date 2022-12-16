<?php 
// controller post
    
    try
    {
        require('Model.php');
        if(isset($_GET['id']) && $_GET['id'] > 0 )
        {
            $post_id = $_GET['id'];
            $post = getPost($post_id);
            $comments = getComments($post_id);
            require('VueComments.php'); 
        } 
        else
        {
            throw new Exception ('Erreur: aucun identifiant de billet envoyé');
        }
    }
    catch(Exception $e)
    {
        echo 'Erreur: ' . $e->getMessage();
    }
     

    
