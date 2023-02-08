<?php
    $title = "Excersice 4";
    include 'header.php'
?>
<br>

<h2>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays</h2>
<?php
    $month = date("F");
    if($month == "Aug"){
        echo "It's August, so it's still holiday.";
    }
    else{
        echo "Not August, this is $month so I don't have any holidays. <br>";
    }
?>

<h2>2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.</h2>
<?php
    $color = "red";
    if($color=="red"){
        echo "The color is red.";
    }
    else{
        echo "The color is not red.";
    }
?>

<h2>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h2>
<?php
    $score = 60;
    if($score>80){
        echo "Excellent";
    }
    elseif($score<=80 and $score>70){
        echo "Great";
    }
    elseif($score<=70 and $score>60){
        echo "Good";
    }
    elseif($score<=60 and $score>50){
        echo "Pass";
    }
    else{
        echo "Fail";
    }
?>


<h2>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h2>
<form action="action.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="fname" required placeholder="Firstname">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="lname" required placeholder="Lastname">
        </div>
    </div>
    <div class="row">
        <div class="col">
            Age: <input type="number" class="form-control" name="age">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="submit" value="Submit" name="Submit1">
        </div>
    </div>
    </form>

<h2>5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. </h2>
<?php
    $browsername = $_SERVER['HTTP_USER_AGENT'];
    
    switch (true)
    {
    case strpos($browsername, "Edg"):
        echo "You are using Microsoft Edge";
        break;
    case strpos($browsername, "Chrome"):
        echo "You are using Google Chrome";
        break;
    case strpos($browsername, "Firefox"):
        echo "You are using Firefox";
        break;
    default:
        echo "Your browser couldn't be determined";
    }

?>


<?php
    include 'footer.php'
?>