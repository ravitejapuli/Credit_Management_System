<style>
    table {
       font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
       border-collapse: collapse;
       width: 100%;
    }
    
    th,td{
        border: 1px solid #ddd;
/*        padding: 8px;*/
    }
/*    tr:nth-child(even){background-color: #f2f2f2;}*/
    tr:hover {background-color: #ddd;}

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
    
    #nameBtn{
        border: none;
        background-color:white;
        color: black;
        width: 100%;
        text-align: left;
        padding: 8px;
        padding-left: 10px;
        margin: 0px;
    }
    #transferBtn{
            background-color:darkgray; /* Green */
            border: none;
            border-radius: 5px;
            color: black;
            padding: 10px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
    }
/*    #nameBtn:hover {background-color: #ddd;}*/
/*    #nameBtn:nth-child(even){background-color: #f2f2f2;}*/
</style>

<script src="cmsJS.js"></script>

<?php
    include "headerPHP.php";

    $valueFromJS = $_GET['name'];

    if($valueFromJS == "none"){
        $sql = "SELECT * from user_details";
        $result = mysqli_query($con,$sql);
        
        echo "<center><table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
        </tr>";
        $i = 1;
        while($row = mysqli_fetch_array($result)) {
            $name = $row['name'];
            echo "<tr>";
            echo "<td>" . $i++ . "</td>";
            echo "<td><button id='nameBtn' value='$name' onclick='showCredits(this.value)'>" . $name . "</button></td>";
            echo "</tr>";
        }
        echo "</table></center>";
    }

    else{
        $sql = "SELECT * FROM user_details where name = '$valueFromJS'";
        
        $result = mysqli_query($con, $sql);
        
        echo "<center><table>
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>CREDIT</th>
        </tr>";
        while($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "</tr>";
        }
        echo "</table></center>";
        echo "<br>";
        echo "<br>";
        echo "<button id='transferBtn' value='$valueFromJS' onclick='transferData(this.value)'>" . "Click here to transfer credits" . "</button>";
        echo "<br>";
        echo "<br>";
        echo "<div id='transferDiv'></div>";
    }

    mysqli_close($con);

?>
                