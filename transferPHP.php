<script src="cmsJS.js"></script>
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
<?php
    include "headerPHP.php";

    $valueFromJS = $_GET['name'];
    $sql = "SELECT name from user_details";
    $result = mysqli_query($con,$sql);
    
    echo "<form>";
    while($row = mysqli_fetch_array($result)){
        $name = $row['name'];
        if($valueFromJS != $name)
            echo "<input type='radio' name='otherUsers' value='$name'>".$name. "<br>";
    }
    echo "</form>";

    echo "<br>";
    echo "<br>";
    
    echo "Enter the credits to be transfered: <br><br>";

    echo "<input id='id1' type='number' style='text-align:center;background-color:lightgrey'>&nbsp;";

    echo "<button value='$valueFromJS' onclick='transferingCredits(this.value)'>Send</button>";
?>