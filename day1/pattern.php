<html>
    <style>
    .for{
        background-color:yellow;
        padding:5px;
    }
    .while{
        background-color:yellow;
        padding:5px;
    }
    .card1{
        background-color:grey;
        padding-left:400px;
        padding-right:400px;
        margin-top:50px;
    }
    .card2{
        background-color:grey;
        padding-left:400px;
        padding-right:400px;
        margin-top:50px;
    }
    body{
        background-color:whitesmoke;
    }
    </style>
    <!-- body -->
    <body>
    <center>
    <nav>
        <a href="/precious/day4/day1.php">day1</a>
    </nav>
    <div class="card1">
    <h1 class="for">using for loop</h1>
        <div >
            <?php
            //using for
            function pattern(){
                for($i = 1; $i <= 7; $i++){
                    echo str_repeat("*", $i). "<br>";
                }
            }
            pattern();
            ?>
        </div>
    </div><br> 
    </div> 
    </center>
    <body>
</html>
