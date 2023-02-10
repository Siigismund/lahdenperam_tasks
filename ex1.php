<?php
    $title = "Excersice 1";
    include 'header.php'
?>
<br>

<body>
    <h1>3.1. Write a simple PHP script to print your information (Name and your groupid).</h1>
    <?php
        echo "Miika Lahdenperä <br>";
        echo "BBCAP22";
    ?>

    <h1>3.2. Write PHP code to display the following message.</h1>
    <?php
        echo "Hello world! My name is \"David\"";
    ?>

    <h1>3.3. Write the PHP code in to display the current date.</h1>
    <?php
        echo date("d.m.Y")
    ?>

    <h1>3.4. $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document.</h1>
    <h1>
        <?php
            $title = "PHP is interesting";
            echo $title;
        ?>
    </h1>

    <h1>3.5. $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade.</h1>
    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    ?>
    <table>
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Pekka</td>
            <td><?php echo $g1 ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Johanna</td>
            <td><?php echo $g2 ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>John</td>
            <td><?php echo $g3 ?></td>
        </tr>
    </table>

    <h1>4. Take a screenshot that verifies, you have set up the development environment and include it as an image in ex1.php.</h1>
    <img src="screenshot.png">
</body>
</html>

<?php
    include 'footer.php'
?>