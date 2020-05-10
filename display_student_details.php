<html>

<head>
    <title>STUDENT DETAILS</title>
    <style>
        div.styling
        {
          font-weight: 900;
          font-family: "Times New Roman";
          font-size: 23px;
          color: darkslateblue;   
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
        tr.style3
        {
            color: darkslateblue;
            font-weight: 900;
            font-size: 20px;
        }
        tr.style4
        {
            font-weight: 900;
            font-size: 20px;
        }
        a.astyle
        {
            font-size: 20px ;
            color: darkslateblue ;
            font-weight: 900
        }
    </style>
</head>

<body style="background-image: url(login_page_bg.png); background-size: cover; ">
    <center>
    <form method="POST" action="display_student_details.php">
            <label style="font-size: 20px ; color: darkslateblue ; font-weight: 900">ENTER STUDENT ID</label>
            <input name="id" type="text" placeholder="Ex:13,55,.." title="ID" class="style1" required><br><br>

            <input type="submit" name="done" class="style2" value="DONE"><BR><BR>
    </form>
    
    <?php
if (isset($_POST['done']))
{
$id = $_POST['id'];
// Create connection
$connect = mysqli_connect('localhost', 'root', '', 'project');
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT student_id, student_name, student_password, student_sex, student_birthdate, student_address FROM student WHERE student_id='$id'";
$result = mysqli_query($connect, $query);
?>

<table border="2">
    <tr class="style3">
    <th>ID</th>
    <th>NAME</th>
    <th>SEX</th>
    <th>DOB</th>
    <th>ADDRESS</th>
    </tr>
    
    <tbody>

<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) 
    {
        echo "<div class='styling'>";
        echo "<tr class='style4'><td>{$row['student_id']}</td><td>{$row['student_name']}</td><td>{$row['student_sex']}</td><td>{$row['student_birthdate']}</td><td>{$row['student_address']}</td></tr>";
        echo "</div>";
    }
} else {
    echo "No record exists";
}

mysqli_close($connect);
}
?>
</tbody>
</table>
<a href="main_display_menu.php" class="astyle"><< GO BACK</a>
</center>
</body>

</html>