<?php 
 // Controller Modifier post

try
{   
        require('Modifier_Post.php');
    if(!(isset($_GET['id'])))
    {
        throw new Exception ('Erreur: aucun identifiant de billet envoyé');
    }   
        $post_id = $_GET['id'];
        if(!(isset($_POST['title'])) && !(isset($_POST['post'])))
        { 
            throw new Exception ('impossible de modifier le post !');
        }     
            /* echo "title : " .$_POST['title'] ;
            echo "<br>";
            echo "post : " .$_POST['post'] ;
            echo "<br>";
            echo "id : " .$post_id ; */
            $title = $_POST['title'] ;
            $post = $_POST['post'] ;
            $succes = ModifyPost($post_id , $title , $post);
             if(succes)
            {
                 header('Location:index.php');
            } 
            else 
            {
                throw new Exception ('impossible de modifier le post !');
            }    
}    

catch(Exception $e)
{
    echo 'Erreur: ' . $e->getMessage();
}