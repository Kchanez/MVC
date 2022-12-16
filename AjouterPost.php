<?php 

    class Post 
    {
        public $id;
        public $title;
        public $date_post;
        public $post;
    }

    // insérer les données d 'un post

    function createPost(string $title , string $post) : bool
    {
        require('Cnx.php');
        $statement = $db->prepare('INSERT INTO  posts ( title , post) VALUES (? , ? )');
        $affectedLined = $statement->execute([$title , $post]);
        return ($affectedLined > 0 );
    }