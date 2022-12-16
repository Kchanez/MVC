
<?php

class Post 
{
	public $id; 
	public $title;
	public $date_post;
	public $post;
	
} 
// Récupérer les données de la liste des posts 
function getposts () 
{
	require('Cnx.php');
	$statement = $db->prepare("SELECT  id, title , post, date_post FROM posts");
	$statement->execute();

	$posts = [];
	while (($row = $statement->fetch())) 
	{
		$post = new Post();
			$post->title=$row['title'] ;
			$post->post=$row['post'];
			$post->date_post=$row['date_post'];  
			$post->id=$row['id'] ;

		$posts[] = $post ; 
	}
	return $posts;
}



// récupérer les données d'un seul post
function getPost($post_id) 
{
	require('Cnx.php');
	$statement = $db->prepare("SELECT  id, title ,  post, date_post FROM posts WHERE id = ?");
	$statement->execute([$post_id]);

	$row = $statement->fetch();
	$post = new Post();

		$post->title = $row['title'];
		$post->post =  $row['post'];
		$post->date_post = $row['date_post'];
		$post->post_id = $row['id'] ;
	
	return $post;
} 



// récupérer les données des commentaires
function getComments($post_id)
{
	require('Cnx.php');
	$statement = $db->prepare("SELECT id, author, comment, date_comment FROM comments WHERE post_id = ? ");
	$statement->execute([$post_id]);
	$comments = $statement->fetchAll();
	return $comments;
}




/* function getComments($post_id)
{
	require('Cnx.php');
	$statement = $db->prepare("SELECT id, author, comment, date_comment FROM comments WHERE post_id = ? ");
	$statement->execute([$post_id]);
	$comments = [];
	while(($row = $statement->fetch()))
	{
		$comment = 
		[
			'author' => $row['author'],
			'date_comment' => $row['date_comment'],
			'comment' => $row['comment']
		];
		$comments[] = $comment;
		return $comments;
	}
}

 */
