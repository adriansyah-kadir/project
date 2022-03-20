<?php require 'function.php';

noLogin();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="style/index.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="form-container">
      <h5>Login to database</h5>
      <form action="login.php" method="post">
        <input type="text" name="username" placeholder="username" required />
        <input
          type="password"
          name="password"
          placeholder="password"
          required
        />
        <label style="box-shadow: none;">
          <span>remember me</span>
          <input type="checkbox" name="remember"/>
        </label>
        <button type="submit">log in</button>
      </form>
    </div>
  </body>
</html>
