
<?php 
    session_start();
    $servername="localhost";
    $username="root";//default
    $pwd="precious";//default
    $db="pntrainee";

    //check connection to the database 
    $conn =  new mysqli($servername,$username,$pwd,$db);
    if(!$conn){
        echo die("connection failed!");
    }
    echo "<h1>connected successfully!</h1>";
    echo "<div><form action=\"day1.php\"><button type=\"submit\">next</button></form></div>";

    
?>
