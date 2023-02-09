<?php
    $title = "Excersice 5";
    include 'header.php'
?>
<br>

<h3>In-class Task Arrays  09.02.2023 (array.php)</h3>

<h2>1. Write a php script to display courses as list. Use < li ></h2>
    <?php
    $course = array("PHP", "HTML", "JavaScript", "CMS", "Project");
    
    foreach($course as $x){
        echo "<li>$x</li>";
    }
    ?>
   
   <br>
<h2>2.Delete an element from the array below</h2>
    <?php
    $course1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
    unset($course1[1]);

    foreach($course1 as $x){
        echo "<li>$x</li>";
    }
    ?>

    <br>
<h2>3. Sort the following array</h2>
    <?php
    $courses3=array("course1"=>"PHP", "course2"=>"HTML", "course3"=>"JavaScript", "course4"=>"CMS", "course5"=>"Project");

    echo "ascending order sort by value";
    asort($courses3);

    foreach($courses3 as $x => $x_value){
        echo "<li>$x_value</li>";
    }

    echo "ascending order sort by Key";
    ksort($courses3);

    foreach($courses3 as $x => $x_value){
        echo "<li>$x_value</li>";
    }

    echo "descending order sort by Value";
    arsort($courses3);

    foreach($courses3 as $x => $x_value){
        echo "<li>$x_value</li>";
    }

    echo "descending order sort by Key";
    krsort($courses3);

    foreach($courses3 as $x => $x_value){
        echo "<li>$x_value</li>";
    }
    ?>

    <br>
<h2>4. Change the following array's all values to upper case</h2>
    <?php
        $courses4=array("php", "html", "javascript", "cms", "project");
        
        foreach($courses4 as $x){
            $x = strtoupper($x);
            echo "<li>$x</li>";
        }
    ?>
    <br>
<h2>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h2>
    <?php
        $colors = array("Red" => "#FF0000", "Purple" => "#A020F0", "Yellow" => "#FFFF00", "Blue" => "#0000FF");

        foreach($colors as $x => $x_value){
            echo "<li>The hex code for $x is $x_value</li>";
        }
    ?>
    <br>
<h2>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h2>
    <?php
        echo "<hr><h2> Calculation average temperature: </h2>";
        
        $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
        68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
        
        // what is explode and what does the below code do? : 
        $temp_array = explode(',', $month_temp);
        $tot_temp = 0;
            /*
            Explode is a build in funtion to break a string into an array.
            "," is the separator and $month_temp is the string to break into an array called $temp_array
            */
        
        // What is count?
        $temp_array_length = count($temp_array);
        foreach($temp_array as $temp)
        {
         $tot_temp += $temp;
        }
         $avg_high_temp = $tot_temp/$temp_array_length;
         echo "Average Temperature is : ".$avg_high_temp."
        "; 
            /* 
            Count is a build in function to count the elements in an array if you use it with array. So in here it counts the number of temperatures in the array = 30
            */
        
        // what does sort do?
        sort($temp_array);
        echo "<br> List of five lowest temperatures :";
        for ($i=0; $i< 5; $i++)
        { 
        echo $temp_array[$i].", ";
        }
            /*
            sort sorts the array in ascending order 
            */

        echo "<br>List of five highest temperatures :";
            
        // explain the following loop
        for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
        {
        echo $temp_array[$i].", ";
        }
            /*
            This loop takes the 5th last value from the array and then loops through the five last values in the array and prints them.
            And because the array is sorted asceding before, therefore these 5 last values are the 5 highest temperatures recorded.
            */
    ?>
   
        <br>
        <br>
<h2>In-class calculator</h2>

<form action="" method="get">
    <div class="row">
        <div class="col">
        <input type="number" step="0.01" placeholder="Enter your first number" name="num1" required>
        <input type="number" step="0.01" placeholder="Enter your second number" name="num2" required>
        </div>
    </div>
    <select name="operator">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select>
    <input type="submit" name="cal" value="Calculate">
</form>
<?php
    if(isset($_GET["cal"])){
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operator = $_GET["operator"];

        switch($operator){
        case "add":
            $result = $num1 + $num2;
            break;
        case "sub":
            $result = $num1 - $num2;
            break;
        case "mul":
            $result = $num1 * $num2;
            break;
        case "div":
            $result = $num1 / $num2;
            break;
        default:
            $result = "Error";
        }
    }

    if(isset($result)){
        echo "Result: $result";
    }
?>

<?php
    include 'footer.php'
?>