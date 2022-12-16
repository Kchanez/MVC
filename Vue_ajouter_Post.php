<!DOCTYPE html>
<html>
<head>
	<title> Blog </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <style>
        h1
        {
            text-align:center;
        }
        .Content_comment
        {
            margin:auto; 
            width:80%; 
            margin-top: 30px;       
        }
        
    </style>
</head>
<body>
    <?php require_once 'PartOfIndex/header.php'; ?>
    <div  class="Content_comment">
        <div class="Content_comment" >
            <h1>Ajouter Un  Post</h1>	
            <form action="Controller_ajouter_Post.php?>" method="post" style="width:50%; margin:auto; padding: 25px 0;">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id">
                </div>

                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="post">post</label>
                    <textarea class="form-control" id="post" name="post" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </form>
        </div>    
    </div>	
	 <?php 
       require_once("PartOfIndex/footer.php");
    ?>
</body>
</html>