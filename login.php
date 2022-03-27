<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<?php include "header.php" ?>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Login Page</h1>
        <div class="border w-50 p-3 m-auto bg-light">
            <form action="login.php" class="form" method="POST">
                <h3 class="text-left text-secondary">Login</h3>

                <div class="form-group">
                    <label for="username"><b>Email</b> </label><br>
                    <input type="email" name="username" id="username" class="form-control" placeholder="Your Email" required />
                </div>

                <div class="form-group">
                    <label for="password"><b>Password</b> </label><br>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Your Password" required />
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-primary" name="login" value="Login" />
                </div>
            </form>
        </div>

            <div class="text-center mt-3">
                <p>New User? <a href="signup.php" class="text-info">Sign Up Here</a></p>
            </div>
    </div>

    <?php 
        if(isset($_POST['login'])) {
            $user = $_POST['username'];
            $pass = $_POST['password'];

            $con = Connect();

            $sql = "SELECT * FROM users WHERE email = '".$user."' AND password = '".$pass."'";
            $result = $con->query($sql);

            if($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc() ) {
                    $name = $row['name'];
                }
                header("Location: home.php?name=".$name);
                exit();
            }
        }
    ?>