<html>

<head>
    <title>
        LOGIN
    </title>
    <style>
        div.style
        {
            background-image: url(bg.jpeg);
            background-size:cover;
            border-radius: 15px 50px;
            width: 500px;
            height: 400px;
            align-items: center;
            
        }
    </style>
</head>
<?php
if (isset($_POST['submit'])) 
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $addr = $_POST['addr'];

    // Create connection
    $connect = mysqli_connect('localhost', 'root', '', 'project');

    // Check connection
    if ($connect) 
    {
        //stored procedure
        $query = "CALL `insert_student`('$id','$name','$password','$gender','$dob','$addr') ";

        //$query = "INSERT INTO student (student_id, student_name, student_password, student_sex, student_birthdate, student_address) VALUES ('$id' , '$name' , '$password' , '$gender' , '$dob' , '$addr' )";

        $result = mysqli_query($connect, $query);

        if ($result) 
        {
            echo "<script>
                    alert('RECORD INSERTED, ENTER OTHER DETAILS') ;
                    </script>";
        } elseif(!$result) {
            echo "Error: " . $query . "<br>" . $connect->connect_error;
        }
    } 
    else
    {
        die("Connection failed: " . $connect->connect_error);
    }
}
?>

<body style="background-image: url(image.jfif); background-size: cover; right:0">
    
        <center><h1 style="color:antiquewhite">STUDENT ACTIVITY AND SUBJECT REPORT</h1></center>
        <div style="text-align:right;width:30vw;margin-left:60vw;margin-right:10vw;background-image:url(login_page_bg.png);border-radius: 15px 50px;"><center>
        <img src="login_page_img.png"><br><br>
        <div >
        <form method="POST" action="login_page1.php">

            <label>Enter Student ID</label>
            <input name="id" type="text" placeholder="Enter here" title="ID" required><br><br>

            <label>Enter Student Name</label>
            <input name="name" type="text" placeholder="Enter here" title="Name" required><br><br>

            <label>Enter Student Password</label>
            <input name="password" type="password" placeholder="Enter here" title="Password" required><br><br>

            <label>Enter Sex :</label>
            <input name="gender" type="radio" value="male" required> Male&nbsp;&nbsp;
            <input name="gender" type="radio" value="female" required> Female &nbsp;&nbsp;
            <input name="gender" type="radio" value="other" required> Other &nbsp;&nbsp; <br><br>

            <label>Enter DOB</label>
            <input name="dob" type="date" placeholder="Enter here" title="DOB" required><br><br>

            <label>Address:</label>
            <textarea name="addr" type="textarea" placeholder="Enter here" style="width:20vw; height:20vw; vertical-align: middle; max-height: 10vw; max-width: 50vw;"></textarea><br><br>

            <input type="submit" name="submit" value="ENTER">

        </form>
        </div>
        <br><br>

        <a href='login_page2.php'>ENTER OTHER DETAILS</a><br><br>

        <label>Already entered details ?</label><br><br>
        <a href="main_display_menu.php">HAVE A LOOK!</a> &nbsp;&nbsp;
        <a href="update.php">UPDATE</a> &nbsp;&nbsp;
        <a href="delete.php">DELETE</a> &nbsp;&nbsp;
        </center>
</div>
</body>
</html>