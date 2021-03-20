<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Exercise 6</title>
</head>

<body>
    <?php
        $string="";
        $vowle=0;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $string=strtolower($_POST['string']);
            for($i=0;$i<strlen($string);$i++){
                if(in_array($string[$i], ["u","e","o","a","i"])){
                    $vowle++;
                }
            }
        }
    ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="string">Search String</label>
            <input type="text" name="string" id="string" class="form-control" placeholder="Nhập chuỗi để tìm nguyên tâm" required/>
            <button type="submit" name="submit" id="submit" class="bg-info mt-2" value="Submit"> Search string</button>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                echo "Có $vowle nguyên âm trong $string";
            }
        ?>
</body>

</html>