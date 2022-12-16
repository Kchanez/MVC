<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Sass/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
<body>
    <div class ="d-flex justify-content-center body">
<?php
        foreach($posts as $post)
        {
?>
    <div class="card carte">
        <!-- <img src="#" class="card-img-top" alt="business"> -->
        <div class="card-body">
            <h3 class="card-title">
                <br>
                <b><?= 'title : '. htmlspecialchars($post->title) ?><b>
                <br>   
                <h5>
                    <em> le <?=  $post->date_post ?> </em>
                </h5>
            </h3>
            <p class="card-text">
                <?= 'content :'. nl2br(htmlspecialchars($post->post )) ?>
                <br />
                <em> 
                    <a href="post.php?action=post&id=<?= urlencode ($post->id)?>" > Comments </a> 
                </em>
                <!-- <em> 
                    <a href="Vue_Modifier_Post.php?action=post&id=<?= urlencode ($post->id)?>" > Modifier </a> 
                </em> -->
                <em> 
                    <a href="Controller_Supprimer_Post.php?id=<?= urlencode ($post->id) ?>" > Supprimer </a> 
                </em>
            </p>

                <a href="post.php?action=post&id=<?= urlencode ($post->id)?>" class="btn btn-primary">Learn more</a>
        </div>
    </div>
<?php		
    }
?>  
</div> 

</body>
</html>

        