
<?php
include('main.php');
?>


<?php
if(isset($_POST['submit']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
if($user=="admin" and $pass=="admin")
{
echo'success';
 header('location:adhome.php');
}
else 
echo ("<script>alert('not valid!!!')</script>");

}
?>   



<form method="POST" action="#">
<center>
<h2>WELCOME TO ADMIN PANEL</h2>
<table>
USERNAME:<input type="text" name="username"><br><br>
PASSWORD:<input type="password" name="password">
</table><br>
<a href="admin.php"><input type="submit" value="login" name="submit" id="submit"></a>
<a href="index.php"><input type="button" value="back"  name="back"></a>
</center>


<?php
include('foot.php');
?>