<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Restaurant List</title>
	<link rel="stylesheet" type="text/css" href="./Style/login_style.css">
	<link rel="stylesheet" href="./Style/rest_list_style.css">
</head>
<body>

  <header>
    <div class="header">
      <div class="container">
        <section>
            <h2>Restaurants</h2>
        </section>

        <nav>
            <ul>
                <?php  if (isset($_SESSION['username'])) : ?>
                <li><p>Welcome<strong><?php echo $_SESSION['username']; ?></strong></p></li>
                <li><p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p></li>
                <?php endif ?>
            </ul>
        </nav>
      </div>
  </div>
  </header>

	<section>
  <div class="image-container">
    <a href="./rest_page/page1.php">
      <img src="../AR_extra/assets/page1img.jpeg" alt="page1 image">
    </a>
    <div class="text">Restaurant 1</div>
  </div>
  </section>

<section>
<div class="image-container">
  <a href="./rest_page/page2.php">
    <img src="../AR_extra/assets/page2img.jpeg" alt="page2 image">
  </a>
  <div class="text">Restaurant 2</div>
</div>
</section>

<section>
<div class="image-container">
  <a href="./rest_page/page3.php">
    <img src="../AR_extra/assets/page3img.jpeg" alt="page3 image">
  </a>
  <div class="text">Restaurant 3</div>
</div>
</section>


<div class="<content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?> 
</div>

</body>
</html>