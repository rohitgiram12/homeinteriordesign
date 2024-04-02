<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Home Interior Design</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
}

.container {
  width: 300px;
  border: 1px solid #ddd;
  border-radius: 4px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

.form-signin {
  text-align: center;
}

.form-signin h2 {
  font-size: 20px;
  margin-bottom: 20px;
  text-transform: uppercase;
}

input[type="text"],
input[type="password"] {
  border-radius: 4px;
  border: 1px solid #ddd;
  padding: 8px;
  font-size: 14px;
  width: 100%;
  margin-bottom: 10px;
}

input[type="text"]:focus,
input[type="password"]:focus {
  box-shadow: 0 0 2px 1px rgba(0, 123, 255, 0.2);
  outline: none;
}

button[type="submit"] {
  border-radius: 4px;
  background-color: #AA5E5E;
  border: none;
  color: #fff;
  padding: 10px 20px;
  text-transform: uppercase;
  font-size: 14px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0069d9;
}

.form-signin-heading {
  text-align: left;
  margin-bottom: 20px;
  color: #e53935;
}
</style>
      
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
			//require_once "index.html";

            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'rohit' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'rohit';
                  
                  echo 'You have entered valid use name and password';

					header("Location: index.html");
					my.php();
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password " required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         
      </div> 
      
   </body>
</html>