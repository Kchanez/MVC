<?php 
    
    //modifier les données d 'un post
    function ModifyPost(string $id ,string $title , string $post) : bool
    {
        require('Cnx.php');
        $statement = $db->prepare ("UPDATE posts SET title = :title , post= :post  WHERE id=$id");
        $statement->bindParam(":title", $title); 
        $statement->bindParam(":post", $post); 
        $res = $statement->execute();
        if($res)
            return true;
        else 
            return false; 
    }
    