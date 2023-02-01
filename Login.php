
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood</title>
    <link rel="stylesheet" href="./Login.css">
    <script src="./Login.js"></script>
  </head>

  <body>
    <div class="login-box">
      <h2>Login</h2>
      <form autocomplete="off">
        <div class="user-box">
          <input id="username" type="text" name="username" required="" />
          <label>Username</label>
        </div>
        <div class="user-box">
          <input id="password" type="password" name="password" required="" />
          <label>Password</label>
        </div>

        <div class="button-form">
          <button id="submit" onclick="auth()"> Submit </button>

          <div id="register">
            Don't have an account ?
            <a href="./SignUp.php"> Register </a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
