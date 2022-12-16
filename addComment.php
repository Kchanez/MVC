<?php 
try
{
    require('comment.php');
    if(isset($_GET['id']) && $_GET['id'] > 0 )
    {
        $post_id = $_GET['id'];
        if(isset($_POST['author']) && isset($_POST['comment']))
        {
    
            $comment->author = $_POST['author'];
            $comment->comment = $_POST['comment'];
            $succes = createComment ($post_id, $comment->author , $comment->comment);
            if(!success)
            {
                throw new Exception ('impossible d\'ajouter  le commentaire !');
            }
            else 
            {
                header('Location: post.php?action=post&id='. $post_id);
            }
        }
        else 
        {
            throw new Exception('Les données du formulaire sont invalides.');
        }
    }
    else
    {
        throw new Exception ('Erreur: aucun identifiant de billet envoyé');
    }
}
catch (Exception $e)
{
    echo 'Erreur: ' .$e->getMessage();
}
  
  
    /* $stmt = $db->prepare("SELECT author FROM ecomments WHERE TRIM(author)=?");
		$stmt->execute([$author]); 
		$user = $stmt->fetch();
    if($user)
    {
        echo '<b class="text-danger"> This Email Is Already Used. </b>';
    }
    else 
    { */
        //echo '<b class="text-success"> This Email Is Not Used. </b>';