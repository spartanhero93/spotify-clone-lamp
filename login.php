<?php
if (isset($_POST['loginButton'])) {
  echo 'login button was set';
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel='stylesheet' type='text/css' media='screen' href='styles.css' />
</head>
<body>

<div id="container">
  <form action="login.php" method="POST" id='form'>
    <h2>Login to your account</h2>
    <br />
    <div class="inputs">
      <div id="inputs__username">
        <label for="username">Username:</label>
        <input type="text" id="username" name='username' placeholder='Username' required>
      </div>
      <div id="inputs__password">
        <label for="password">Password:</label>
        <input type="password" id='password' name='password' required>
      </div>
      <div id="inputs__submitBtn">
        <input type="submit" id='loginButton' name='loginButton'>
      </div>
    </div>
  </form>
</div>
  
</body>
</html>