<?php 

try
{
    require('AjouterPost.php');
    if(isset($_POST['title']) && isset($_POST['post']) && isset($_POST['id']))
    {
        //$post_id = $_GET['id'];
        $post = new Post();
        $post->id = $_POST['id'];
        $post->title = $_POST['title'];
        $post->post = $_POST['post'];
        $succes = createPost ($post->title , $post->post);
        if(!success)
        {
            throw new Exception ('impossible d\'ajouter  le post !');
        }
        else 
        {
            header('Location:index.php');
        }
    }
    else 
    {
        throw new Exception('Les données du formulaire sont invalides.');
    }
}
catch (Exception $e)
{
    echo 'Erreur: ' .$e->getMessage();
}
