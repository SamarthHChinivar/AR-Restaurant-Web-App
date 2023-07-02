<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login Page</title>
  <link rel="stylesheet" type="text/css" href="../Style/login_style.css">
</head>
<body>
  <div class="header">
  	<h2>Admin Login</h2>
  </div>

  <header>
	<div class="header">
		<div class="container">
		<section>
			<h2>Admin Login</h2>
		</section>

		<nav>
			<ul>
				<li><p> <a href="../" style="color: gainsboro;">CUSTOMER</a> </p></li>
			</ul>
		</nav>
		</div>
	</div>
	</header>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  </form>
</body>
</html>