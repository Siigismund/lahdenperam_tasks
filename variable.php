<?php
    $title = "Excersice 3";
    include 'header.php'
?>
 
 <h3>3. In-class Task Variable & Operators 07.02.2023 (variable.php)</h3>

 <h2>1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using < h3 > tag: Hello …., You are welcome to my site.</h2>
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
            Date: <input type="date" class="form-control" name="bdate">
        </div>
        <div class="col">
            Select fav volor: <input type="color" class="form-control" name="color">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="submit" value="Submit" name="Submit">
        </div>
    </div>
    </form>


<h2>3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.</h2>
    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Pekka</td>
                <td><?php echo $g1 ?></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Johanna</td>
                <td><?php echo $g2 ?></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>John</td>
                <td><?php echo $g3 ?></td>
            </tr>
        </tbody>
    </table>

<h2>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string</h2>
    <?php
        $fname = "Miika";
        $lname = "Lahdenperä";
        
        echo strlen($fname. $lname);
    ?>

<h2>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h2>
    <?php
        $num1 = 298;
        $num2 = 234;
        $num3 = 46;

        echo $num1 + $num2 + $num3;
    ?>

<h2>6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER)</h2>
    <?php
    echo $_SERVER['HTTP_USER_AGENT'];
    ?>

<?php
    include 'footer.php'
?>