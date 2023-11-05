<!DOCTYPE html>
<html>
  <head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Signup</h1>
    <form action="process-signup.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required>

      <button type="submit" name="submit">Signup</button>
    </form>
  </body>
</html>
