<?php 
   
   if (isset($key) && $key == "hhdsfs1263z") {
 ?>
 <style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f1f1f1;
    }

    .header {
        background-color: #333;
        color: #fff;
        padding: 15px;
        text-align: center;
        position: relative;
    }

    .header h2 {
        margin: 0;
    }

    .header b {
        color: #ffcc00;
    }

    #navbtn {
        cursor: pointer;
    }

    .main-profile-link {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        text-decoration: none;
        color: #fff;
    }

    .main-profile-link i {
        margin-right: 5px;
    }

    .body {
        display: flex;
    }

    .side-bar {
        background-color: #333;
        color: #fff;
        width: 250px;
        height: 100vh;
        padding: 20px;
    }

    #navList {
        list-style: none;
        padding: 0;
    }

    #navList li {
        margin-bottom: 15px;
    }

    #navList a {
        text-decoration: none;
        color: #fff;
        display: flex;
        align-items: center;
    }

    #navList i {
        margin-right: 10px;
    }

    .section-1 {
        flex: 1;
        padding: 20px;
    }

</style>

<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">My <b>Blog</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<div class="d-flex align-items-center main-profile-link" >
			<a href="profile.php" >
			<i class="fa fa-user" aria-hidden="true"></i>&nbsp;
		   <span>@<?php echo $_SESSION['username']; ?></span>
		   </a>
		</div>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				
			</div>
			<ul id="navList">
				<li >
					<a href="Users.php">
						<i class="fa fa-users" aria-hidden="true"></i>
						<span>Users</span>
					</a>
				</li>
				<li>
					<a href="Post.php">
						<i class="fa fa-wpforms" aria-hidden="true"></i>
						<span>Post</span>
					</a>
				</li>
				<li>
					<a href="Category.php">
						<i class="fa fa-window-restore" aria-hidden="true"></i>
						<span>Category</span>
					</a>
				</li>
				<li>
					<a href="Comment.php">
						<i class="fa fa-comment-o" aria-hidden="true"></i>
						<span>Comment</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Setting</span>
					</a>
				</li>
				<li>
					<a href="../logout.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">

<?php 
   } 
 ?>