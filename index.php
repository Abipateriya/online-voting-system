<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body  >
        
            <center>
            <div id="headerSection">
            <h1><img src="image/headcollege.png" alt="logo" width=100%/></h1> 
            <h2 ><b><u>College President Voting Page</u></b></h2> 
            </div>
            <hr>

            <div id="loginSection">
    <h2>Login</h2>
    <form action="api/login.php" method="POST">
        <div class="form-group">
            <label for="mob">Mobile:</label>
            <input type="number" class="form-control" name="mob" required>
        </div>
        <div class="form-group">
            <label for="pass">Password:</label>
            <input type="password" class="form-control" name="pass" required>
        </div>
        <div class="form-group">
            <label for="role">I am a:</label>
            <select class="form-control" name="role">
                <option value="1">Student</option>
                <option value="2">Nominee</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="mt-3">
        Not registered? <a href="routes/register.php">Register here</a>
    </div>
</div>

  </form>
</div>

            </center> 
    </body>
</html>