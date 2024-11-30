<?php
    require_once 'connection.php';
?>
<?php
    function addData($connection,$fname,$lname,$gender,$age,$course){
        try{
            $sql = "INSERT INTO students (fname,lname,course,gender,age) VALUES('{$fname}','{$lname}','{$course}','{$gender}',$age)";
            $result = mysqli_query($connection,$sql);

            if(isset($result)){
                echo "New record is created";
            }else{
                die("Error ".mysqli_error($connection));
            }

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
		$age = $_POST['age'];
		$course = $_POST['course'];
		AddData($connection,$fname,$lname,$gender,$age,$course);
	}

    function showData($connection){
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 14</title>
</head>
<body>
    <form method="post" action="index.php">
        First Name: <input type="text" name="fname"><br><br>
        Last Name: <input type="text" name="lname"><br><br>
        Gender:<br>
        <input type="radio" name="gender" value="Male">Male<br>
        <input type="radio" name="gender" value="Female">Female<br><br>
        Age: <input type="number" name="age"><br><br>
        Course: <input type="text" name="course"><br><br>
        <button>Submit Your Data</button>
    </form>
</body>
</html>