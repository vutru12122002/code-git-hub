<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		
	</style>
</head>
<body>
	
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="shadow w-450 p-3" 
    	      action="php/login.php" 
    	      method="post">

    		<h4 class="display-4  fs-1">LOGIN</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo htmlspecialchars($_GET['error']); ?>
			</div>
		    <?php } ?>

		  <div class="mb-3">
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))? htmlspecialchars($_GET['uname']):"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Login</button>
		  <a href="admin-login.php" class="link-secondary">Admin Login</a>
		  &nbsp;&nbsp;&nbsp;
		  <a href="blog.php" class="link-secondary">Blog</a>
		  &nbsp;&nbsp;&nbsp;
		  <a href="signup.php" class="link-secondary">Sign Up</a>
		</form>
    </div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Bootstrap background color */
        }

        .vh-100 {
            min-height: 100vh;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 450px;
            background-color: #fff;
        }

        .login-form h4 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .error-message {
            margin-bottom: 15px;
        }

        .btn-primary {
            width: 100%;
        }

        .link-secondary {
            margin-top: 10px;
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form class="login-form" action="php/login.php" method="post">
            <h4 class="display-4 fs-1">LOGIN</h4>
            <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger error-message" role="alert">
                    <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
            <?php } ?>

            <div class="mb-3">
                <label class="form-label">User name</label>
                <input type="text" class="form-control" name="uname" value="<?php echo (isset($_GET['uname']))? htmlspecialchars($_GET['uname']):"" ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="pass">
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="admin-login.php" class="link-secondary">Admin Login</a>
            &nbsp;&nbsp;&nbsp;
            <a href="blog.php" class="link-secondary">Blog</a>
            &nbsp;&nbsp;&nbsp;
            <a href="signup.php" class="link-secondary">Sign Up</a>
        </form>
    </div>
</body>
</html>
