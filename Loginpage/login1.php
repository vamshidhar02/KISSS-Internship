<!DOCTYPE html>
<html>
<head>
    <title>Login1 Page</title>
     <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <form action="process.php" method="POST">
              <h2>Login</h2>
             <div>
                 <label>Username: </label>
                <input type="text" id="user" name="user" />
             </div>
             <div>
                 <label>Password: </label>
                 <input type="password" id="pass" name="pass" />
             </div>
             <div>
                <input type="submit" id="btn" value="Login" />
             </div>
        </form>
    </div>
</body>
</html>