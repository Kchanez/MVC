<?php

class Post 
    {
        public $id; 
        public $title;
        public $post;
    } 

    // récupérer les données d'un seul post
    function getPost($id) 
    {
        require('Cnx.php');
        $statement = $db->prepare("SELECT  id, title , post FROM posts WHERE id = ?");
        $statement->execute([$id]);

        $row = $statement->fetch();
        $post = new Post();

            $post->post_id = $row['id'] ;
            $post->title = $row['title'];
            $post->post =  $row['post'];
        return $post;
    } 