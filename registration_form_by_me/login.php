<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .form-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .remember-me {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if(isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            require_once "database.php";

            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if($user){
                if(password_verify($password, $user["password"])){
                    session_start();
                    $_SESSION["user"] = "yes";

                    if (isset($_POST['remember'])) {
                        setcookie('user_email', $email, time() + (86400 * 30), "/"); // 30 days
                    }

                    header("Location: index.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'>Password doesn't match</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Email doesn't match</div>";
            }
        }
        ?>
    
        <form action="login.php" method="post">
            <div class="form-group">
                
                Email: <input type="email" placeholder="Enter email:" name="email" class="form-control">
            </div>

            <div class="form-group">
               Password: <input type="password" placeholder="Enter password:" name="password" class="form-control">
            </div>

            <div class="form-btn">
                <div class="remember-me">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>

            <div>
                <p>Not registered yet? <a href="registration.php">Register here</a></p>
            </div>
        </form>
    </div>
</body>
</html>