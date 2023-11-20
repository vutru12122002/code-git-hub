<style>
  
  .navbar{
	background-color: white;
  }

  .navbar-toggler-icon {
    background-color: #000; 
  }

  .navbar-brand {
    color: #000 !important; 
  }

  .navbar-nav .nav-link {
    color: #000 !important; 
  }

  .form-control {
    border-color: #000;
    color: #000; 
    border-radius: 3px;
  }

  .btn-outline-success {
    /* color: #0088FF; */
    border-color: #000;
    border-radius: 3px;
  }

  /* Additional styles for the container and logo in the first navbar */
  .container-fluid {
    display: flex;
    align-items: center;
  }

  .navbar-brand img {
    max-width: 100px; /* Adjust the max-width as needed for your logo */
  }
  .d-flex{
	margin-left: 30px;
  }

</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="../page/dashboad.php">
      <img src="image/yfood_logo.png" alt="" class="image">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="page/dashboad.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page/blog_single.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="page/Contacts.php">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category.php">Category</a>
        </li>

        <?php if ($logged) { ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="profile.php" role="button" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-user" aria-hidden="true"></i> @<?=$_SESSION['username']?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login | Signup</a>
          </li>
        <?php } ?>
      </ul>
      
      <form class="d-flex" role="search" method="GET" action="page/blog.php">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
