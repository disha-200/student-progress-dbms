<html>
<head>
<title>UPDATE</title>
<style>
        a.astyle
        {
            
            color: darkslateblue ;
            font-weight: 900
        }
        input.style
        {
            
            color: darkslateblue;
            font-weight: 900;
        }
        input.style1
        {
            margin-top: 5%;
             
            color: darkslateblue;
            font-weight: 900;
        }
        input.style2
        {
            background-color: dodgerblue;
            color: darkslateblue;
            font-weight: 900;
        }
</style>
</head>
<body style="background-image: url(login_page_bg.png); background-size: cover; ">
    <center>
    <form method="POST" action="update_address.php">

<label style=" color: darkslateblue ; font-weight: 900">ENTER STUDENT ID :</label>
<input name="id" type="text" placeholder="Ex:13,55,.." title="ID" class="style1" required>&nbsp;&nbsp;

<label style=" color: darkslateblue ; font-weight: 900">UPDATE STUDENT ADDRESS :- </label>&nbsp;&nbsp;

<textarea name="addr" type="textarea" placeholder="Enter here" style="width:20vw; height:20vw; vertical-align: middle; max-height: 10vw; max-width: 50vw;"></textarea> &nbsp;&nbsp;

<input type="submit" name="done" class="style2" value="UPDATE"><BR><BR>
</form>

<?php
if (isset($_POST['done']))
{
$id = $_POST['id'];
$addr = $_POST['addr'];
// Create connection
$connect = mysqli_connect('localhost', 'root', '', 'project');
// Check connection
if (!$connect) {
die("Connection failed: " . mysqli_connect_error());
}

$query = "UPDATE student set student_address='$addr' WHERE student_id='$id' ";
$result = mysqli_query($connect, $query);

if($result)
{
echo "<script>
alert('RECORD UPDATED')
</script>";
}elseif(!$result) {
echo "Error: " . $query . "<br>" . $connect->connect_error;
}

mysqli_close($connect);
}
?>
<a href="update.php" class="astyle"><< GO BACK</a>
</center>
</body>
</html>