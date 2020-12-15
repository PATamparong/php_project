<html>
<style>
.all{
    padding-left:550px;
    padding-top:50px;
}
</style>
    <body>
    <nav>
        <a href="/precious/day4/day1.php">day1</a>
    </nav>
    <div class="all">
    <div>
        <div>
            <?php
            //using for 
            for($i = 1; $i <= 15; $i++){
                echo $i." ";
            }
            ?>
        </div>  
    <div><br>

    <div>
        <div>
            <?php
            //using while
            $num = 15;
            $num2 = 1;
            while($num2 <= $num){
                echo $num2++." ";
            }
            ?>
        </div>
    </div><br>
    
    <div>
        <div>
            <?php
            //do while
            $number = 15;
            $number2 = 1;
            do{
                echo $number2." ";
                $number2++;
            }while($number >= $number2);
            ?>
        </div>
    </div>
    </div>
    </body>
</html>

