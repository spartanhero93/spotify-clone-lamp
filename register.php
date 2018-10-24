<?php

/** Functions */

function sanitizePassword($inputText)
{
  $inputText = strip_tags($inputText);
  return $inputText;
}
function sanitizeUsername($inputText)
{
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  return $inputText;
}
function sanitizeFormString($inputText)
{
  $inputText = sanitizeUsername($inputText);
  $inputText = ucfirst(strtolower($inputText));
  return $inputText;
}

if (isset($_POST['registerButton'])) {

  /** Variables */
  $firstName = sanitizeFormString($_POST['inputs__first_name']);
  $lastName = sanitizeFormString($_POST['inputs__last_name']);

  $username = sanitizeUsername($_POST['register_username']);
  $email = sanitizeFormString($_POST['register_email']);
  $email_confirm = sanitizeFormString($_POST['register_email_confirm']);

  $password = sanitizePassword($_POST['register_password']);
  $password_confirm = sanitizePassword($_POST['register_password_confirm']);
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel='stylesheet' type='text/css' media='screen' href='styles.css' />
</head>
<body>

<div id="container">
  <form action="register.php" method="POST" id='register_form'>
    <h2>Register for an account</h2>
    <br />
    <div class="inputs">
      <div class="inputs__first_name">
        <label for="register_first_name">First name:</label>
        <span>
          <input type="text" id='register_first_name' name='register_first_name' placeholder='Bob' required>
        </span>
      </div>
      <div class="inputs__last_name">
        <label for="register_last_name">Last name:</label>
        <span>
          <input type="text" id='register_last_name' name='register_last_name' placeholder='Smith' required>
        </span>
      </div>
      <div class="inputs__username">
        <label for="register_username">Username:</label>
        <span>
          <input type="text" id="register_username" name='register_username' placeholder='username' required>
        </span>
      </div>
      <div class="inputs__email">
        <label for="register_email">Email:</label>
          <span>
          <input type="email" id="register_email" name='register_email' placeholder='john@mail.com' required>
        </span>
      </div>
      <div class="inputs__email">
        <label for="register_email_confirm">Email:</label>
          <span>
          <input type="email" id="register_email_confirm" name='register_email_confirm' placeholder='john@mail.com' required>
        </span>
      </div>
      <div class="inputs__password">
        <label for="register_password">Password:</label>
          <span>
            <input type="password" id='register_password' name='register_password' required>
        </span>
      </div>
      <div class="inputs__password">
        <label for="register_password_confirm">Confirm password: </label>
          <span>
            <input type="password" id='register_password_confirm' name='register_password_confirm' required>
        </span>
      </div>
      <div class="inputs__submitBtn">
        <span>  
          <input type="submit" id='registerButton' name='registerButton'>
      </span>  
    </div>
    </div>
  </form>
</div>
  
</body>
</html>

