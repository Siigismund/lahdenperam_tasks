<?php
    $title = "JavaScripts Events and form validations";
    include 'header.php'
?>

<h2>A simple button to display date</h2>
    <button onclick="this.innerHTML = Date()">Click to know the date</button>

<h2>Make a button and a placeholder as a paragraph for the date</h2>
    <button onclick="getElementById('d1').innerHTML = Date()">Click to know the date</button>
    <p id="d1"></p>

<h2>Change the background color</h2>
    <form>
        <input type="color" id="background" onchange="changeColor()">
    </form>

<h2>Change the font color</h2>
    <form>
        <input type="color" id="fcolor" onchange="changeFcolor()">
    </form>


<h2>On mouse</h2>
    <span onmouseover="this.style.color='blue';
            this.style.backgroundColor='yellow';
            this.style.fontSize='2em';"
    onmouseout="this.style.color='red';
            this.style.backgroundColor='white';
            this.style.fontSize='1em';"
            >Some text</span>

<?php
    include 'footer.php'
?>