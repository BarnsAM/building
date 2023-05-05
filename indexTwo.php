<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="login-page">
	  <div class="form">
	    <form class="register-form" action="signup-check.php" method="post">
		  <?php if (isset($_GET['error'])) { ?>
     	  	<p class="error"><?php echo $_GET['error']; ?></p>
     	  <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

		  
	      <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Имя"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Имя"><br>
          <?php }?>

		  <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Имя пользователя"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Имя пользователя"><br>
          <?php }?>


	      <input type="password" 
                 name="password" 
                 placeholder="Пароль"><br>

          <input type="password" 
                 name="re_password" 
                 placeholder="Повторите пароль"><br>

	      <button type="submit">создать</button>

	      <p class="message">Зарегестрированы? <a href="#">Войти</a></p>
	    </form>

	    <form class="login-form" action="login.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <input type="text" name="uname" placeholder="Имя пользователя"><br>
		 <input type="password" name="password" placeholder="Пароль"><br>
	      <button type="submit">ВХОД</button>
	      <p class="message">Нет аккаунта? <a href="#">Создать</a></p>
	    </form>
	  </div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/login.js"></script>
</body>
</html>