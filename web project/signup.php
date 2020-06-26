<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>signup</title>
    <link rel="stylesheet" href="register.css">
  </head>
  <body>
    <h1>register here!!!!</h1>
    <form class="register" action="login.php" method="post">
      <table align="center" cellpadding="5px">
      <tr><td>
        <label>name:</label></td></tr>
      <td><input type="text" name="name" placeholder="enter your name"></td></tr>
      <tr><td><label>email</label></td></tr>
      <td><input type="email" name="email" placeholder="enter your email"></td></tr>
      <tr><td><label>password</label></td></tr>
    <td><input type="password" name="password" placeholder="enter your password"></td></tr>
      <tr><td><label>confirm password</label></td></tr>
      <tr><td><input type="password" name="confpassword" placeholder="re-enter your password"></td></tr>

    </table>
<div><button type="submit">Register</button><div>
    </form>

  </body>
</html>
