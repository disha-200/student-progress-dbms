<html>

<head>
    <title>COURSE DETAILS</title>
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
            margin-top: 3%;
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
    <form method="POST" action="display_course_details.php">
            <h2> COURSE </h2>
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

$query = "SELECT * from course c,student s WHERE c.course_id=s.course_id and s.student_id='$id' ";
$result = mysqli_query($connect, $query);
?>

<table border="2">
    <tr class="style3">
    <th>COURSE ID</th>
    <th>COURSE NAME</th>
    </tr>
    
    <tbody>

<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) 
    {
        echo "<div class='styling'>";
        echo "<tr class='style4'><td>{$row['course_id']}</td><td>{$row['course_name']}</td></tr>";
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

<form method="POST" action="display_course_details.php">
            <h2> SUBJECTS </h2>
            <label style="font-size: 20px ; color: darkslateblue ; font-weight: 900">ENTER STUDENT ID</label>
            <input name="id" type="text" placeholder="Ex:13,55,.." title="ID" class="style1" required><br><br>

            <input type="submit" name="done1" class="style2" value="DONE"><BR><BR>
    </form>
    
    <?php
if (isset($_POST['done1']))
{
$id = $_POST['id'];
// Create connection
$connect = mysqli_connect('localhost', 'root', '', 'project');
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT subject_id, subject_name FROM subject s, course c, student ss WHERE s.course_id=c.course_id and c.course_id=ss.course_id and ss.student_id='$id'";
$result = mysqli_query($connect, $query);
?>

<table border="2">
    <tr class="style3">
    <th>SUBJECT ID</th>
    <th>SUBJECT NAME</th> 
    </tr>
    
    <tbody>

<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) 
    {
        echo "<div class='styling'>";
        echo "<tr class='style4'><td>{$row['subject_id']}</td><td>{$row['subject_name']}</td></tr>";
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

<form method="POST" action="display_course_details.php">
            <h2> LECTURER </h2>
            <label style="font-size: 20px ; color: darkslateblue ; font-weight: 900">ENTER STUDENT ID</label>
            <input name="id" type="text" placeholder="Ex:13,55,.." title="ID" class="style1" required><br><br>

            <input type="submit" name="done2" class="style2" value="DONE"><BR><BR>
    </form>
    
    <?php
if (isset($_POST['done2']))
{
$id = $_POST['id'];
// Create connection
$connect = mysqli_connect('localhost', 'root', '', 'project');
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT lec_id, lec_name,subject_name FROM lecturer l,subject s, course c, student ss WHERE l.subject_id=s.subject_id and s.course_id=c.course_id and c.course_id=ss.course_id and ss.student_id='$id'";
$result = mysqli_query($connect, $query);
?>

<table border="2">
    <tr class="style3">
    <th>LECTURER ID</th>
    <th>LECTURER NAME</th>    
    <th>SUBJECT NAME</th>
    </tr>
    
    <tbody>

<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) 
    {
        echo "<div class='styling'>";
        echo "<tr class='style4'><td>{$row['lec_id']}</td><td>{$row['lec_name']}</td><td>{$row['subject_name']}</td></tr>";
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