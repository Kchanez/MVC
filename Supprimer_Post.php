<?php 

    class Post 
    {
        public $id; 
        public $title;
        public $post;
    } 

    /* // récupérer les données d'un seul post
    function getPost($id) 
    {
        require('Cnx.php');
        $statement = $db->prepare("SELECT  id, title , post FROM posts WHERE id = ?");
        $statement->execute([$id]);

        $row = $statement->fetch();
        $post = new Post();

            $post->title = $row['title'];
            $post->post =  $row['post'];
            $post->post_id = $row['id'] ;
        
        return $post;
    } 
 */
    // récupérer les commentaires
    function DeleteComments($id)
    {
        require('Cnx.php');
        $statement = $db->prepare(" DELETE  FROM  comments  WHERE post_id = ? ");
        $statement->execute([$id]);
        //$SuppLined = $statement->execute([$id]);
       /*  if($SuppLined == 0)
            return (true );
        else 
            return (false); */
            return (true );    
    }

    //supprimer un post
    function DeletePost(string $id) : bool
    {
        require('Cnx.php');
        $statement = $db->prepare(" DELETE FROM  posts WHERE id=?");
        $statement->execute([$id]);
        return (true ); 
    }
