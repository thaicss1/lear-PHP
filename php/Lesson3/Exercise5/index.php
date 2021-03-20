<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex5</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
$a=$b=$result=$err="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(is_numeric($_POST["numbera"])&& is_numeric($_POST["numberb"])){
        $a=$_POST["numbera"];
        $b=$_POST["numberb"];
        if(isset($_POST["plus"])){
            $result=$a+$b;
        }
        if(isset($_POST["minus"])){
            $result=$a-$b;
        }
        if(isset($_POST["multiply"])){
            $result=$a*$b;
        }
        if(isset($_POST["divide"])){
            $result=$a/$b;
        }
    }
    else{
        $err="Chỉ được nhập số";
    }
}
?>
    <h3 class="text-center text-info"><b>Thực hành toán tử</b></h3>
    <span class="text-danger"><?php echo $err;?></span>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <p>Nhập số a:</p>
        <input class="form-control" type="text" name="numbera" required/>
        <p>Nhập số b:</p>
        <input class="form-control" type="text" name="numberb" required/>
        <button class="btn-lg bg-success mt-3" type="submit" name="plus" value="a+b">a+b</button>
        <button class="btn-lg bg-primary mt-3" type="submit" name="minus" value="a-b">a-b</button>
        <button class="btn-lg bg-danger mt-3" type="submit" name="multiply" value="a*b">a*b</button>
        <button class="btn-lg bg-warning mt-3" type="submit" name="divide" value="a/b">a/b</button>
        </form>
		<?php
            echo" Kết quả là:".$result;
		?>
    </div>

</body>
</html>