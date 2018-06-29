<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>School system</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" placeholder="Enter your Full Name" >
    </div>
    <div class="input-group">
      <label>ADM</label>
      <input type="text" name="ADM" placeholder="Enter your ADM NO" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" placeholder="Enter your ID NO">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    
  </form>
</body>
</html>
