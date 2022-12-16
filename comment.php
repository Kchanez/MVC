<?php

class Comment
{
	public $author;
	public $date_comment;
	public $comment;
}


// récupérer les données des commentaires
function getComments(string $post_id) : Comment
{
	require('Cnx.php');
    $statement = $db->prepare("SELECT id, author, comment, date_comment FROM comments WHERE post_id = ? ");
	$statement->execute([$post_id]);
	
	$comments = [];
	 while (($row = $statement->fetch())) 
	{	
		$comment = new Comment ();
		$comment->author = $row['author'];
		$comment->date_comment = $row['date_comment'];
		$comment->comment = $row['comment'];

    	$comments[] = $comment;
	} 
	return $comments;
}



// insérer les données d'un commentaire 
function createComment(string $post_id, string $author, string $comment) : bool
{
	require('Cnx.php');
	$statement = $db->prepare(
    	'INSERT INTO comments (post_id, author, comment) VALUES(?, ?, ?)'
	);
	$affectedLines = $statement->execute([$post_id, $author, $comment]);

	return ($affectedLines > 0);
}

