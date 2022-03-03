<html>

<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
/*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}*/
 
// Include config file
require_once "db.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["user"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["user"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["pass"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["pass"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT userID, username, password, usertype FROM user_tbl WHERE username = ?";
        $sqlpass= "SELECT confirmPass FROM user_tbl WHERE username = ?"; 
        $sqlID = "SELECT userID FROM user_tbl WHERE username = ?";       
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $password, $usertype);
                    if(mysqli_stmt_fetch($stmt)){
                    	$hashPass = password_hash($password, PASSWORD_DEFAULT);
                        if(password_verify($password, $hashPass)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 


                            
                            // Redirect user to welcome page

                            	if($usertype == 'admin'){
                            		header("location: adminHome.php");
                            	}
                            	else if($usertype == 'cashier1'){
                            		header("location: index.php");
                            	}
                            	else if($usertype == 'cashier2'){
                            		header("location: cashier.php");
                            	}
                            	else if($usertype == 'accountant'){
                            		header("location: employee.php");
                            	}
                            	else{
                            		echo "does not exist";
                            	}
                        } 
                        else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
<head>
	<title>Login</title>
	<style type="text/css">
	body{
		background-image: url('background.jpg');
 		background-repeat: repeat;
	}
	.headerDiv{
		background-color:#deb887;
		height: 15%;
		width: 100%;
		float: left;
		border-radius: 15px;
	}
	.spaceDiv{
		height: 2%;
		width: 100%;
		float: left;
	}
	.loginDiv{
		height: 60%; 
		width: 60%; 
		background-color: rgba(210,180,140, 0.7); 
		border-radius: 15px;  
		border: solid #b38b6d; 
		float: left;
	}
	</style>
</head>
<body>
	<div style="height: 20%; width: 100%;">
		<br>
		<br>
		<br>
		<br>
		<FONT face=Perpetua Titling MT size=20 COLOR=#b38b6d><center>W E L C O M E</center></FONT>
	</div>
	<div style="height: 50%; width: 20%; float: left;">
		
		<?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

	</div>
	<div class="loginDiv">
		<div style="height: 100%; width: 49.5%;float: left;">
			<menu>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<br>
			<br>
			<font face=Helvetica size=6 COLOR=white>username: </font>
			<input type="text" name="user" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" style="height: 15%; width: 90%; border-radius: 15px;"><br>
			<span class="invalid-feedback"><?php echo $username_err; ?></span>
			<br>
			<font face=Helvetica size=6 COLOR=white>Password:</font>
			<input type="password" name="pass" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" style="height: 15%; width: 90%; border-radius: 15px;">
			<span class="invalid-feedback"><?php echo $password_err; ?></span>
			<!--button-->
			<br>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="loginSub" value="Login" style="height: 10%; width: 30%; border-radius: 8px;">
			</form>
			</menu>
		</div>
		<div style="height: 100%; width: 49.5%;float: left;">
			<br>
			<center><IMG SRC="loginLogo.png" HEIGHT=330 WIDTH=350></center>
		</div>
		
	</div>
	<div style="height: 50%; width: 19.5%;float: left;">
	</div>

</body>
</html>