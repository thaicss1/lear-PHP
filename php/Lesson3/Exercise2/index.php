<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
$firstnameErr = $lastnameErr = $emailErr = $genderErr = $hobbiesErr= $stateErr="";
$firstname =$lastname =$email =$gender=$hobbies=$state="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["firstname"])) {
			$firstnameErr = "Firstname không được để trống";
		}
		if (empty($_POST["lastname"])) {
			$lastnameErr = "Lastname không được để trống";
		}
    	if (empty($_POST["email"])) {
        $emailErr = "Email không được để trống";
    	} else {
        $email = input_data($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email không đúng định dạng.";
        }
    	}
    	if (empty ($_POST["gender"])) {
        $genderErr = "Gender là trường bắt buộc.";
    	} else {
        $gender = input_data($_POST["gender"]);
    	}
		if (empty ($_POST["state"])) {
			$stateErr = "State là trường bắt buộc.";
			} else {
			$state = input_data($_POST["state"]);
			}
		if (empty ($_POST["hobbies"])) {
			$hobbiesErr = "Hobbies là trường bắt buộc.";
			} else {
			$hobbies = input_data($_POST["hobbies"]);
			}
	}
function input_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form method="post" class="border" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
<h2>Registration Form</h2>
<span class = "text-danger">* Bắt buộc nhập </span>
<br><br>
<div class="row">
	<div class="col-sm-8">
    <p>First Name</p>
    <input type="text" name="firstname" class="form-control">
    <span class="text-danger">* <?php echo $firstnameErr; ?> </span>
    <br><br>
	<p>Last Name</p>
    <input type="text" name="lastname" class="form-control">
    <span class="text-danger">* <?php echo $lastnameErr; ?> </span>
    <br><br>
    <p>E-mail</p>
    <input type="email" name="email"class="form-control">
    <span class="text-danger d-block">* <?php echo $emailErr; ?> </span>
    <br><br>
    <label>Gender</lable>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other
    <span class="text-danger">* <?php echo $genderErr; ?> </span>
    <br><br>
	<p>State</p>
	<select name="states" id="state" class="form-control">
        <option value="1">Johor</option>
        <option value="2">Massachusetts</option>
        <option value="3">Washington</option>
    </select>
	<p class="mt-3">Hobbies</p>
        <input type="checkbox" name="hobbies[]" id="badminton" value="badminton">
        <label for="badminton">Badminton</label>
        <input type="checkbox" name="hobbies[]" id="football" value="football">
        <label for="football">Football</label>
        <input type="checkbox" name="hobbies[]" id="bicycle" value="bicycle">
        <label for="bicycle">Bicycle</label><br>
    <button type="submit" name="submit" value="Submit" class="bg-info">Save record</button>
	<button type="reset" name="reset" id="reset" value="Reset">Reset</button>
    <br><br>
</form>
 
<?php
if(isset($_POST['submit'])) {
    if($firstnameErr == ""  && $lastnameErr == "" && $emailErr == "" && $genderErr == "" ) {
        echo "<h3 color = #FF0001> <b>Đăng kí thành công!.</b> </h3>";
        echo "<p>Thông tin của bạn:</p>";
        echo "FirstName: " .$firstname;
        echo "<br>";
		echo "Lastname: " .$lastname;
        echo "<br>";
        echo "Email: " .$email;
        echo "<br>";
        echo "Gender: " .$gender;
		echo "<br>";
        echo "State: " .$state;
		echo "<br>";
        echo "Hobbies: " .$hobbies;
    } else {
        echo "<p> <b>Bạn chưa nhập đầy đủ thông tin hoặc chưa hợp lệ.</b> </p>";
    }
}
?>    
</div>
</body>
</html>