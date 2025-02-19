
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

            <?php


                include("config.php");
                if(isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $age = $_POST['age'];
                    $password = $_POST['password'];

                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);


                    $verify_query = mysqli_query($con,"SELECT  Email FROM users WHERE Email='$email'");

                    if(mysqli_num_rows($verify_query) !=0) {
                        echo " <div class='message'>
                                <p>This email is used, Try another One Please!</p>
                            </div> <br>";
                        echo "<a href='javascript:self.history.back()'><a href='register.php'><button class='btn'>Go Back</button>";
                    }
                    else {

                        $sql =  "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                        $stmt = mysqli_stmt_init($con);
                        $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                        if ( $prepareStmt) {
                            mysqli_stmt_bind_param($stmt,"sss",$username,$email,$passwordHash);
                            mysqli_stmt_execute($stmt);
                            
                        }

                        mysqli_query($con, "INSERT INTO users(Username,Email,Age,Password) VALUES ('$username', '$email', '$age', '$password')") or die ("Error Occured");


                        echo " <div class='message'>
                                <p>Registration successful!</p>
                            </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Login now</button>";

                    }
                } else {

        
        
            ?>
                <header>Sign Up</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" name="submit" class="btn" value="Register" required>
                    </div>

                    <div class="links">
                        Already a member? <a href="index.php">Sign in</a>
                    </div>
                </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>