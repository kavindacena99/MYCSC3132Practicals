<?php
    require_once 'dbconf.php';

    try {
        $sql = "SELECT * FROM students";

        $result = mysqli_query($connect,$sql);
        
        if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['sid'] . " " . $row['name'] . " " . $row['course'] . "<br>";
            }
        } else {
            echo "No results";
        }
    } catch (Exception $e) {
        die($e->getMessage());
    }
?>