<html>
<head>
<title>DELETE</title>
<style>
        a.astyle
        {
            font-size: 20px ;
            color: darkslateblue ;
            font-weight: 900
        }
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
</style>
</head>
<body style="background-image: url(login_page_bg.png); background-size: cover; ">
    <center>
    <form method="POST" action="delete.php">

            <label style="font-size: 20px ; color: darkslateblue ; font-weight: 900">ENTER STUDENT ID TO DELETE :</label>
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

$query = "DELETE FROM student WHERE student.student_id='$id' ";
$result = mysqli_query($connect, $query);

if($result)
{
    echo "<script>
    alert('RECORD DELETED')
    </script>";
}elseif(!$result) {
    echo "Error: " . $query . "<br>" . $connect->connect_error;
}

mysqli_close($connect);
}
?>
</tbody>
</table>
<a href="login_page1.php" class="astyle"><< GO BACK</a>
</body>
</html>