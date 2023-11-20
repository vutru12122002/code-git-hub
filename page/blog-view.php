<?php 
session_start();
$logged = false;
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
	 $logged = true;
	 $user_id = $_SESSION['user_id'];
}

if (isset($_GET['post_id'])) {

   	  include_once("../admin/data/Post.php");
        include_once("../admin/data/Comment.php");
        include_once("../db_conn.php");
        $id = $_GET['post_id'];
        $post = getById($conn, $id);
        $comments = getCommentsByPostID($conn, $id);
        $categories = get5Categoies($conn); 

     if ($post == 0) {
     	  header("Location: ../page/blog.php");
	     exit;
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog - <?=$post['post_title']?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<style	>
			.body{
				margin-top: 200px;
			}	
		

		  .container {
            margin-top: 50px;
        }

         .main-blog {
            flex: 3;
            margin-right: 20px;
        }

        .main-blog-card {
            border: 1px solid #dee2e6;
            border-radius: 10px;
        }

        .main-blog-card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            max-height: 400px;
            object-fit: cover;
        }

       /*  .main-blog-card h5 {
            color: #007bff;
        }

        .main-blog-card p {
            color: #6c757d;
        }

        .main-blog-card a.btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .main-blog-card .d-flex {
            align-items: center;
            justify-content: space-between;
        }

        .main-blog-card .react-btns {
            display: flex;
            align-items: center;
        }

        .main-blog-card i.fa-thumbs-up {
            color: #6c757d;
            margin-right: 5px;
        }

        .main-blog-card small {
            color: #6c757d;
        } 

        .aside-main {
            flex: 1;
        }
 */
        .category-aside a.list-group-item {
            cursor: pointer;
        }

        .category-aside a.list-group-item.active {
            background-color: #007bff;
            border-color: #007bff;
        }
	
	</style>
</head>
<body>
	<?php 
        include '../inc/NavBar.php';
      ?>
    <div class="body">	
    <div class="container mt-5">
    	 <section class="d-flex">

  	   <main class="main-blog">

  	   	<div class="card main-blog-card mb-5">
	  <img src="../image/upload/blog/<?=$post['cover_url']?>" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title"><?=$post['post_title']?></h5>
	    <p class="card-text"><?=$post['post_text']?></p>
	    <hr>
<div class="d-flex justify-content-between">
<div class="react-btns">
	<?php 
		$post_id = $post['post_id'];
		if ($logged) {
			$liked = isLikedByUserID($conn, $post_id, $user_id);
		
        
        if($liked){
		 ?>
    	<i class="fa fa-thumbs-up liked like-btn" 
   	   post-id="<?=$post_id?>"
   	   liked="1"
   	   aria-hidden="true"></i>
       <?php }else{ ?>
      <i class="fa fa-thumbs-up like like-btn"
        post-id="<?=$post_id?>"
   	    liked="0"
        aria-hidden="true"></i>
    <?php } } else{ ?>
    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
    <?php } ?>
   Likes (
    <span><?php 
     echo likeCountByPostID($conn, $post['post_id']);
      ?></span> )
      <i class="fa fa-comment" aria-hidden="true"></i> comments (
	        <?php 
            echo CountByPostID($conn, $post['post_id']);
	         ?>
	        )
	    	
	    </div>	
	    <small class="text-body-secondary"><?=$post['crated_at']?></small>
</div>

<form action="../php/comment.php" 
	      method="post"
	      id="comments">

	  <h5 class="mt-4 text-secondary">Add comment</h5>
	  <?php if(isset($_GET['error'])){ ?>
		<div class="alert alert-danger" role="alert">
		  <?php echo htmlspecialchars($_GET['error']); ?>
		</div>
	    <?php } ?>

	    <?php if(isset($_GET['success'])){ ?>
		<div class="alert alert-success" role="alert">
		  <?php echo htmlspecialchars($_GET['success']); ?>
		</div>
	    <?php } ?>
	  <div class="mb-3">
	    <input type="text" 
	           class="form-control"
	           name="comment">
	    <input type="text" 
	           class="form-control"
	           name="post_id"
	           value="<?=$id?>"
	           hidden>
	  </div>
	  <button type="submit" class="btn btn-primary">Comment</button>
	</form> <hr>
       <div>
  	<div class="comments">
	<?php if($comments != 0){ 
	  foreach ($comments as $comment) {
	  $u = getUserByID($conn, $comment['user_id']);
	?>
	<div class="comment d-flex">
	<div>
		<img src="../image/user-default.png" width="40" height="40">
	</div>
	<div class="p-2">
	   <span>@<?=$u['username'] ?></span>
	   <p><?=$comment['comment']?></p>
	   <small class="text-body-secondary"><?=$comment['crated_at']?></small>
	</div>
		</div><hr>
		<?php }} ?>
  	</div>
    </div>       
  </div>
  </div>

</main>

<aside class="aside-main">
   <div class="list-group category-aside">
	  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
	    Category
	  </a>
	  <?php foreach ($categories as $category ) { ?>
	  <a href="../category.php?category_id=<?=$category['id']?>"
	     class="list-group-item list-group-item-action">
	  	<?php echo $category['category']; ?>
	  </a>
	  <?php } ?>
	</div>
</aside>
</section>
</div>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
   <script>
   	 $(document).ready(function(){
			  $(".like-btn").click(function(){
			     var post_id = $(this).attr('post-id');
			     var liked = $(this).attr('liked');

			     if (liked == 1) {
                 $(this).attr('liked', '0');
                 $(this).removeClass('liked');
			     }else {
                 $(this).attr('liked', '1');
                 $(this).addClass('liked');
			     }
			     $(this).next().load("../ajax/like-unlike.php",
			     	{
			     		post_id: post_id
			     	});
			  });
		  });
   </script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	</div>
</body>
</html>
<?php }else {
	header("Location: ../page/blog.php");
	exit;
} ?>