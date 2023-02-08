<?php
    $title = "Action";
    include 'header.php'
?>

<?php
if(isset($_POST["Submit"])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['bdate'];
    $color = $_POST['color'];

    echo "<h3> Hello $fname $lname, you are welcome to my site. Your favourite color is $color and your date of birth is $dob <h3>";
} 
elseif(isset($_POST["Submit1"])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $age = $_POST['age'];

    if ($age >= 18) {
        echo "Congratulations $firstname $lastname you are eligible for voting!";
    } else {
        echo "Sorry $firstname $lastname you are not eligible for voting.";
    }
}
?>

<?php
    include 'footer.php'
?>

