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

  $firstName = sanitizeFormString($_POST['register_first_name']);
  $lastName = sanitizeFormString($_POST['register_last_name']);

  $username = sanitizeUsername($_POST['register_username']);
  $email = sanitizeFormString($_POST['register_email']);
  $email_confirm = sanitizeFormString($_POST['register_email_confirm']);

  $password = sanitizePassword($_POST['register_password']);
  $password_confirm = sanitizePassword($_POST['register_password_confirm']);
}


?>