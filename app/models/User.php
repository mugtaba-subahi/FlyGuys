<?php
class User
{

  function loginRules()
  {
    return $rules = [
      "email" => "required|email",
      "password" => "required"
    ];
  }

  function registerRules()
  {
    return $rules = [
      "email" => "required|email",
      "email_confirm" => "required|matches:email",
      "password" => "required|min:8|max:30",
      "password_confirm" => "required|matches:password"
    ];
  }

}

?>