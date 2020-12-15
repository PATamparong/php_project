<html>
    <style>
    .card{
        background-color:rgb(179, 179, 179);
        padding:50px;
        height:260px;
        width:500px;
        position:absolute;
        padding-left:50px;
    }
    .navigation{
        background-color:rgb(0, 230, 172);
        height:50px;
        margin-bottom:10px;
        font-family:cursive;
        color:gray;
    }
    .right{
        background-color:rgb(153, 153, 153);
        float:50px;
        float:right;
        height:560px;
        width:450px;
        text-align:left;
        padding-left:260px;
        padding-top:50px;
    }
    body{
        background-color:rgb(230, 230, 230);
    }
    .input{
        width:200px;
        height:30px;
    }
    .input1{
        width:100px;
        height:30px; 
        background-color:aqua;    
    }
    .wow{
        background-color:orange;
    }
    </style>
    <body>
    <nav>
        <a href="/precious/day4/day1.php">day1</a>
    </nav>
    <center>
    <div class="navigation">
    <h1>EXERCISE NUMBER TWO</h1>
    </div>
    <div class="card">
    <div class="container"> 
    <form>
        <h1 class="wow">Input Number</h1>
        <input class="input" name="number" action = "divisible.php" type="number" method="GET" placeholder="number" />
        <input class="input1" type="submit">
    </form>
    <!-- php -->
    <div>
        <?php
        $num = $_GET["number"];
        if($num % 2 == 0){
            echo "<h2>divisible by 2</h2>" . "\n";
        }

        if($num % 3 == 0){
            echo "<h2>divisible by 3</h2>"."\n";
        }
        
        if($num % 5 == 0 ){
            echo "<h2>divisible by 5</h2>"."\n";
        }
        ?>
    </div>
    </div>
    <div>
    </center>
    <!-- others -->
    <center>
    <div class="right">
        <div>
        <?php 
        echo "<br>";
        //application for functions
        function number_Divisible(){
            for($i = 1; $i <= 15; $i++){
                echo "$i"." ";
                if($i% 2 == 0){
                    echo 'number divisible by two'."<br>";
                }else if($i % 3 == 0){
                    echo 'number divisible by three'."<br>";
                }else if($i % 5 == 0){
                    echo 'number divisible by five'."<br>";
                }else{
                    echo 'not divisible by any'."<br>";
                }
            }
        }

        number_Divisible();
        echo "<br>";
        //divisible by 2
        $number = 4;
        if($number % 2 == 0){
            echo 'number divisible by two'."<br>";
        }else{
            echo 'number not divisible by two'."<br>";
        }

        //divisible by 3
        $number2 = 9;
        if($number2 % 3 == 0){
            echo 'number divisible by three'."<br>";
        }else{
            echo 'number not divisible by three'."<br>";
        }

        //divisible by 5
        $number5 = 20;
        if($number5 % 5 == 0){
            echo 'number divisible by five'."<br>";
        }else{
            echo 'number not divisible by five'."<br>";
        }

        ?>
        </div>
    </div>
    </center>
    <body>
</html>


