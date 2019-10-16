<?php
 include('db.php');
 if(isset($_POST['submit'])){
     // echo "hi";
     $fname = $_POST['fname'];
     $dob = $_POST['dob'];
     $address = $_POST['add'];
     $quali = $_POST['quali'];


if (!$fname  && !$dob && !$address && !$quali){
    echo  ("<script>alert('not valid!!!')</script>");
}

$query='insert into register(fname,dob,address,quali)values ("'.$fname.'","'.$dob.'","'.$address.'","'.$quali.'")';  
 $result = mysqli_query($con, $query);
 }
?>
   
     
     
     
     
     
     
            <?php
            include('main.php');
            ?>

            <form method="POST" action="reg.php">
            <table>
            <h1>REGISTRATION FORM</h1>
            <tr><td>NAME</td></tr><td><input type="text" name="fname"></td>
            <tr><td>DOB </td></tr><td><input type="Date Of Birth" name="dob"></td>
            <tr><td>ADDRESS</td></tr><td><input type="text" name="add"></td>
            <tr><td>QUALIFICATION </td></tr><td><input type="text" name="quali"></td>
            </table><br>
            <input type="submit" value="Register" id="submit" name="submit">
           <a href="index.php"><input type="button" value="back" name="back"></a>
            </form>



            <?php
            include('foot.php');
            ?>
