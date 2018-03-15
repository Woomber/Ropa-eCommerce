<?php session_start(); ?>
<div class="header">
  <h1 class="title-head"><a href="index.php">Pellier</a></h1>
  <p class="title-right">
    <?php if (@$_SESSION['loggedin'] == true) { ?>
      <a href="#">Bienvenido, <?php echo $_SESSION['username']; ?></a> | <a href="php/logout.php">Cerrar sesión</a>
    <?php } else { ?>
      <a href="login.php">Iniciar Sesión</a> | <a href="register.php">Registrarse</a>
    <?php } ?>
  
  </p>

</div>
