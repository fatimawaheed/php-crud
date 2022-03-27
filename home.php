<!DOCTYPE html>
<html lang="en">
<?php include "header.php" ?>
<body>
    <div class="container border border-success mt-5">
        <h1 class="text-center">Assignment No. 3</h1>
        <ul>
            <li>
                <p>
                    <b>Welcome!</b> you're signed in as <b><?php echo $_GET['name'] ?></b>
                </p>
            </li>

            <p class="text-left text-primary">
                <li>
                    <a href="#">Log Out</a>
                </li>
            </p>
        </ul>
    </div>
</body>