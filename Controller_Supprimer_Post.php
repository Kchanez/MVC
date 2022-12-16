<?php 
 // Controller Supprimer post
    try
    {   
        require('Supprimer_Post.php');
        echo $_GET['id'];
        if (isset($_GET['id']) && $_GET['id'] > 0)
        {
            $id=$_GET['id'];
           
            $sucess1 = DeleteComments($id);
            $sucess2 = $succes = DeletePost ($id);
            
            if($sucess1 == true && $sucess2 == true)
            {
                echo 'le post a été supprimer avec succes';
                header('Location:index.php');
            }
            /* if($sucess == true)
            {
                $succes = DeletePost ($id);
                if(!success)
                {
                    throw new Exception ('impossible de supprimer le post !');
                }
                else 
                {
                    header('Location:index.php');
                }
            }
            else 
            {
                throw new Exception ('impossible de supprimer les commentiares !');
            }   */ 
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
	




