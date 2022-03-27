<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
    <?php include "header.php" ?>

<body>
    <div class="container mt-3">
        <h1 class="text-center">Registration Page</h1>
        <div class="border w-50 p-3 m-auto bg-light">
            <form action="signup.php" class="form" method="POST">
                <h3 class="text-left text-secondary">Sign Up</h3>
                <div class="form-group">
                    <label for="name"><b>Name</b> </label><br>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name" >
                </div>

                <div class="form-group">
                    <label for="email"><b>Email</b> </label><br>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="password"><b>Password</b> </label><br>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
                </div>

                <div class="form-group">
                    <label for="confirm-password"><b>Confirm Password</b> </label><br>
                    <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm Password" >
                </div>

                <div class="form-group">
                    <input type="submit" name="signup" class="btn btn-lg btn-primary" value="Sign Up" />
                </div>
                </form>           
        </div>
                
                <div class="text-center mt-3">
                    <p>Already Registered? <a href="login.php" class="text-info">Login Here</a></p>
                </div>

    </div>

<?php 
    if(isset($_POST['signup'])) {
        $user = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $cpass = $_POST['confirm-password'];

        if($pass == $cpass) {
            $con = Connect();

            $sql = "INSERT INTO users (name, email, password) VALUES ('".$user."','".$email."','".$pass."')";

            $result = $con->query($sql);

            if($result === true) {
                header("Location: login.php");
            exit();
            }
        } else {
            echo "Registration Unsuccessful!";
        }
        
    }
?>
</body>