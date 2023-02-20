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

    <br><br>
    <script>
        document.write("Hello world this is JavaScript")
    </script>
    <br><br>
    <noscript>
        Please enable JavaScript to view this content.
    </noscript>

    <input type="button" onclick="hello()" value="Click me">

    <h1>3.4. $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document.</h1>
    <h1>
        <?php
            $title = "PHP is interesting";
            echo $title;
        ?>
    </h1>

    <script>
        //window.alert
            //window.alert("this will trigger alert box");
            //window.alert(5+10);

        //document.write
            document.write("Hello this is interesting");
    </script>

    <br><br>
    <button onclick="add()">Click to add</button>

    <p id="place1" style="color: red; background-color: yellow"></p>
    <span id="place2" style="color: red; background-color: green"></span>

    <script>
        document.getElementById("place1").innerHTML = "This will go to place 1";
        document.getElementById("place2").innerHTML = "This will go to place 2";
    </script>

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

    <h2>Changing background-color</h2>
    <form>
        <input type="color" name="background" onchange="changeColor('background',this.value)">
    </form>


</body>
</html>

<?php
    include 'footer.php'
?>