<?php
$title= "Update your info";
include "../header.php";
$a = $_GET['id'];
include "db.php";
$result = mysqli_query($conn, "Select * from studentinfo
where id='$a' ");
$row = mysqli_fetch_array($result);
?>
<br>
<br>
<h2>Update your information below</h2>
<form name="update" method="post" action="">
    <input type="text" name="fname" placeholder="First name" required value="<?php echo $row['fname'];?>" ><br>
    <input type="text" name="lname" placeholder="Last name" required value="<?php echo $row['lname'];?>" > <br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city'];?>" > <br>
    <select name="groupid" value="<?php echo $row['groupid'];?>" >
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="Other">Other</option>
    </select>
    <br><br>
    <input type="submit" value="Update your info" name="update"> <br><br>
    <input type="submit" value="Delete your info" name="delete">
</form>

<?php
    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $groupid = $_POST['groupid'];
        $query = mysqli_query($conn, "UPDATE studentinfo
        set fname='$fname', lname='$lname', city='$city', groupid='$groupid' 
        WHERE id='$a'");
    if($query){
        echo "<h2> Your information is updated succesfully</h2>";
    }
    else{echo "Record not modified";}
    }
?>

<?php
    if(isset($_POST['delete'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $groupid = $_POST['groupid'];
        $query = mysqli_query($conn, "DELETE FROM studentinfo WHERE id='$a'");
    if($query){
        echo "<h2>Your information has been deleted successfully</h2>";
    } 
    else {echo"<h2>Record not deleted</h2>";}
    }
?>

<?php
include '../footer.php';
?>