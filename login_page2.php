<?php
        if(isset($_POST['submit']))
        {
            {
                $id = $_POST['id'];
                $courseid = $_POST['courseid'];

                // Create connection
                $connect = mysqli_connect('localhost','root','','project');
        
                // Check connection
                if ($connect) 
                {
                    
                   $query = "UPDATE student SET course_id='$courseid' WHERE student_id='$id' ";

                    $result = mysqli_query($connect, $query);
                }
                else
                {
                    die("Connection failed: " . $connect->connect_error);
                }
        
                if ($result == TRUE) 
                {
                    echo "<script>
                    alert('DONE') ;
                    </script>";
                }
               else 
                {
                   echo "Error: " . $query . "<br>" . $connect->connect_error;
                }

                $connect->close();

            }
        }   
?>
<?php
        if(isset($_POST['submit1']))
        {
            {
                $id1 = $_POST['id1'];
                $activityname = $_POST['activityname'];
                $achievement = $_POST['achievement'];

                // Create connection
                $connect = mysqli_connect('localhost','root','','project');
        
                // Check connection
                if ($connect) 
                {
                    
                   $query = "INSERT INTO achievement (activity_name, achievement, student_id) VALUES('$activityname','$achievement','$id1' ) ";

                    $result = mysqli_query($connect, $query);
                }
                else
                {
                    die("Connection failed: " . $connect->connect_error);
                }
        
                if ($result == TRUE) 
                {
                    echo "<script>
                    alert('DONE') ;
                    </script>";
                }
               else 
                {
                   echo "Error: " . $query . "<br>" . $connect->connect_error;
                }

                $connect->close();

            }
        }   
?>
<html>
<head>
<title>
    LOGIN
</title>
<style>
    astyle
    {
        font-size: 20px ;
        color: darkslateblue ;
        font-weight: 900
    }
    input.style1
    {
            margin-top: 10%;
            margin-bottom: 5%;
            font-size: 20px; 
            color: darkslateblue;
            font-weight: 900;
    }
    input.style2
    {
            background-color: dodgerblue;
            color: darkslateblue;
            font-size: 20px;
            font-weight: 900;
    }
    input.style3
    {
        margin-bottom: 5%;
        font-size: 20px; 
        color: darkslateblue;
        font-weight: 900;
    }
</style>
</head>
<body style="background-image: url(login_page_bg.png); background-size: cover"><center>

<form method="POST" action="login_page2.php">

<h2 style="margin-top: 10%">COURSE</h2>

<label style="font-size: 20px ; color: darkslateblue ; font-weight: 900">Enter Student ID :</label>&nbsp;
<input name="id" type="text" placeholder="Ex: 10,13,.." title="ID" class="style1" required><br><br>

<label style="font-size: 20px ; color: darkslateblue ; font-weight: 900">Enter Course :</label>&nbsp;

<select name="courseid" class="style2">
<option value="select" style="font-weight: 900;">SELECT A COURSE</option>
<option value="100" style="font-weight: 900;">ENGINEERING</option>
<option value="101" style="font-weight: 900;">ARCHITECTURE</option>
<option value="102" style="font-weight: 900;">BUSINESS MANAGEMENT</option>
<option value="103" style="font-weight: 900;">BACHELORS OF SCIENCE</option>
</select>
<br><br>

<input name="submit" type="submit" value="DONE" class="style2">

</form>

<form method="POST" action="login_page2.php">

<h2 style="margin-top: 10%">ACHIEVEMENT</h2>

<label style="font-size: 20px ; color: darkslateblue ; font-weight: 900">Enter Student ID :</label>&nbsp;
<input name="id1" type="text" placeholder="Ex: 10,13,.." title="ID" class="style1" required><br><br>

<label style="font-size: 20px ; color: darkslateblue ; font-weight: 900">Enter Activity Name :</label>&nbsp;
<input  name="activityname" type="text" placeholder="Enter here" title="Activity" required class="style3"><br><br>

<label style="font-size: 20px ; color: darkslateblue ; font-weight: 900">Enter Achievement :</label>&nbsp;
<input name="achievement" type="text" placeholder="Enter here" title="Achievement" required class="style3"><br><br>

<input name="submit1" type="submit" value="DONE" class="style2">

</form>

<a href="login_page1.php" class="astyle"><< GO BACK</a>
</center>
</body>
</html>    