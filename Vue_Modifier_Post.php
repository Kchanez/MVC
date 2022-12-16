<!DOCTYPE html>
<html>
<head>
	<title> Blog </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head>
<body>
	<?php 
        require_once 'PartOfIndex/header.php';  
        require_once 'getPost.php'; 
        if(!(isset($_GET['id'] )) )
        {
             throw new Exception ('Erreur: aucun identifiant de billet envoyé');
        }
            $post = getPost($_GET['id']);        
    ?>
    <div class="Content_comment" style=" margin:auto; width:50%; border: 1px solid #000; margin-top: 15px;">
        <h1>Modifier Un Post</h1>	
        <form action="Controller_Modifier_Post.php?action=post&id=<?= urlencode ($post->post_id)?>" method="post" style="width:50%; margin:auto; padding: 25px 0; ">
            <div class="form-group">
                <input type="hidden" class="form-control" id="id" name="id">
            </div>

            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title"  value="<?= $post->title ?>" required >
            </div>

            <div class="form-group">
                <label for="post">post</label>
                <textarea class="form-control" id="post" name="post" rows="3"  required> <?= $post->post ?> </textarea>
            </div>
            
            <button type="submit" class="btn btn-primary" id="modifier" name="Modifier" >  Modifier</button>
        </form>
    </div>	
	<footer>
        <div style="height: 100px;">
        </div>
    </footer>	
</body>
</html>