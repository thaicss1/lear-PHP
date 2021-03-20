<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Exercise 1</title>
</head>
<body>
    <?php
    $username = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            echo "<p class='col-12 m-auto px-5 pb-5'><span class='text-success'>Dang nhap thanh cong!</span>" . "<br>";
            echo "Username la: " . $UserName . "<br>";
            echo "Password la: " . $Password."</p>";
        } else {
             echo "Thông tin đăng nhập không chính xác.Hãy kiểm tra lại!";
        }
    }
    ?>
    <div class="container-fluid rounded-3">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="w-50 mx-auto text-center rounded-top" method="POST">
            <h2 class=" bg-success">Sign in</h2>
            <input class="form-control mt-4" type="text" name="username" id="userName" placeholder="Username" required> <br>
            <input class="form-control mt-1" type="text" name="password" id="passWord" placeholder="Password" required> <br>
            <button class="bg-success btn-lg col-12" type="submit" name="login" value="Login">Login</button>
        </form>

    </div>
    <div class="text-center">
        <?php
        echo $username . "<br>";
        echo $password;
        ?>
    </div>


</body>

</html>