<?php 
session_start();
$logged = false;
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
	 $logged = true;
	 $user_id = $_SESSION['user_id'];
    }

  include_once("db_conn.php");
  include_once("admin/data/Post.php");
  include_once("admin/data/Comment.php");
  
  $categories = getAllCategories($conn);
  $categories5 = get5Categoies($conn); 
  $category = 0;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php 
           if (isset($_GET['category_id'])){
           	   $c_id =$_GET['category_id'];
           	   $category = getCategoryById($conn, $c_id); 
               if ($category == 0) {
                 echo "Blog Category Page";
               }else {
               	echo "Blog | ".$category['category'];
               }
           }else {
              echo "Blog Category Page";
           }
		 ?>
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/ionicons.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">


<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
<style>
	.body {
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

.main-blog-card h5 {
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

.category-aside a.list-group-item {
    cursor: pointer;
}

.category-aside a.list-group-item.active {
    background-color: #007bff;
    border-color: #007bff;
}
 h1.display-4.mb-4.fs-3 {
    font-size: 2rem; /* Adjust the font size as needed */
    color: #007bff; /* Primary color */
    margin-bottom: 20px; /* Adjust margin-bottom as needed */
    margin-left: 35px; 
  }
</style>
</head>
<body>
 <?php 
     include 'inc/NavBar1.php';
  ?>
  
	  <div class="body">
 <div class="container mt-5">
 <h1 class="display-4 mb-4 fs-3">
 			<?php if ($category != 0)
 			  echo $category['category'];  
 			else echo "<h1>Blogs</h1>" ?>
 	
</h1>
  
  <section class="d-flex">
  	 <?php if (!isset($_GET['category_id'])) { ?>
  	   <main class="main-blog p-2">
		   <aside class="aside-main">
   <div class="list-group category-aside">
	  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
	    Category
	  </a>
	  <?php foreach ($categories as $category ) { ?>
	  <a href="category.php?category_id=<?=$category['id']?>"
	     class="list-group-item list-group-item-action">
	  	<?php echo $category['category']; ?>
	  </a>
	  <?php } ?>
	</div>

</aside>
  	   </main> 
	
  	<?php }else{
  	 $cId = $_GET['category_id'];
  	 $posts = getAllPostsByCategory($conn, $cId);
  	?>
	<?php if ($posts != 0) { ?>
   <main class="main-blog">
   	<?php foreach ($posts as $post) { ?>
   	   <div class="card main-blog-card mb-5">
	  <img src="image/upload/blog/<?=$post['cover_url']?>" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title"><?=$post['post_title']?></h5>
	    <?php 
            $p = strip_tags($post['post_text']); 
            $p = substr($p, 0, 200);               
	     ?>
	    <p class="card-text"><?=$p?>...</p>
	    <a href="page/blog-view.php?post_id=<?=$post['post_id']?>" class="btn btn-primary">Read more</a>
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
		    <a href="page/blog-view.php?post_id=<?=$post['post_id']?>#comments">    
        	<i class="fa fa-comment" aria-hidden="true"></i> Comments (
		        <?php 
                    echo CountByPostID($conn, $post['post_id']);
		         ?>
		        )
		    </a>	
		    </div>	
		    <small class="text-body-secondary"><?=$post['crated_at']?></small>
        </div>	
	    
	  </div>
	</div>
   <?php } ?>
   </main>
  	<?php }else {?> 
  		<main class="main-blog p-2">
	  		<div class="alert alert-warning">
	  			No posts yet.
	  		</div>
  	    </main>
  	<?php } } ?>
       <aside class="aside-main">
       	   <div class="list-group category-aside">
			  <a href="#" 
			     class="list-group-item list-group-item-action active" 
			     aria-current="true">
			    Category
			  </a>
			  <?php foreach ($categories as $category ) { ?>
			  <a href="category.php?category_id=<?=$category['id']?>" 
			  	 class="list-group-item list-group-item-action">
			  	 <?php echo $category['category']; ?> 
			  </a>
			  <?php } ?>
			</div>
       </aside>
  </section>

    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	</div>
</body>
</html>