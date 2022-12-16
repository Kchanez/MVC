<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <title>Our Blog</title>
    <style>
        h1
        {
            text-align:center;
            margin-bottom: 8%;
        }
        button 
        {
            margin :20px 0px; 
        }
    </style>
</head>
<body>
<div class="Content_comment" style=" margin:auto; width:50% ; margin-top:8% ; ">
    <h1> Our Blog</h1>
    <p style=" padding-top:8%">
        <a href="index.php">Retour à la liste des billets</a>
    </p>

    <div class="d-flex justify-content-between">
        <h4>  
            <strong>
                <?= htmlspecialchars($post->title) ?>
            </strong>
        </h4>
            <h5 style="display:inline"> 
                le <?=  $post->date_post ?>
            </h5>
    </div>
        <p>
             <?= nl2br(htmlspecialchars($post->post)) ?>
        </p>
    
    <h2> Comments </h2>
    <?php 
        if(empty($comments))   
        {
            echo  ('aucun commentaire n\'a été écrit'); 
        } 

    ?>
    <form action="addComment.php?action=post&id=<?= $post->post_id ?>" method="post">
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" id="author" name="author" required>
        <div id="show"></div>
    </div>
    <div class="form-group">
        <label for="comment">Comment</label>
        <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
    </div>
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </form>
    <?php
        class Comment
        {
            public $author;
            public $date_comment;
            public $comment;
        }   
        $comment = new Comment(); 
        
        foreach($comments as $commentaire)
        { 
            $comment->author =$commentaire['author'];
            $comment->date_comment = $commentaire['date_comment'];
            $comment->comment =$commentaire['comment'];
    ?>
    <div style=" margin-top: 3% ;border:1px solid #F6F6F6; ">
        <div class="d-flex justify-content-between" style="padding:10px">
            <h4>
                <strong> <?= htmlspecialchars($comment->author) ?></strong> 
            </h4>
            <h5 style="display: inline;">
                le <?= htmlspecialchars($comment->date_comment) ?>
            </h5>
        </div>
        <div class="alert alert-light" >
            <p style="padding-top:0px">
                <?= nl2br(htmlspecialchars( $comment->comment)) ?> 
            </p>
        </div> 
    </div>
    <?php         
        }    
 
    ?>
</div>    
    
        <?php 
            require ('PartOfIndex/footer.php');
        ?>
</body>
</html>