
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .word{
        color:red;
    }
    </style>
</head>
<body>
    <nav>
        <a href="/precious/day4/day3.php">day3</a>
    </nav>
    <h1>factorial:</h1>
    <div>
    <!-- factorial -->
    <?php 
        class factorial{
            //number1 -> factorial of a number
            function number_fact($num1){
                $fact = 1;
                // using for
                for($i=1;$i<=$num1;$i++){
                    $fact *= $i;
                }
                print_r("factorial of ".$num1." = ".$fact);
            }  
        }
        $factorial = new factorial;
        $factorial->number_fact(5);

    ?>
    </div>

    <!-- chessboard -->
    <P>---------------------------------------------------------------------------</P>
    <h1>CHESSBOARD</h1>
    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php 
            function chess($row){
                while($row<=8){
                    echo " "."row";
                    echo $row++;
                    echo"<tr>";
                    for($col=1;$col<=8;$col++)
                        {
                        $total=$row+$col;
                        if($total%2==0)
                        {
                        echo "<td height=30px width=30px bgcolor=whitesmoke></td>";
                        }
                        else
                        {
                        echo "<td height=30px width=30px bgcolor=grey></td>";
                        }
                        }
                        echo "</tr>";
                                    
                                }
            }
            chess(1);
        ?>
    </table>
    <P>---------------------------------------------------------------------------</P>
    <div>
        <?php 
            function array1(){
                $array = array('january','february','march','april','may','june','july','august','september','october','november','december');
                echo "<br>"."before:"."<br>".join(',',$array)."<br>";

                $array2 = array();
                array_push($array2,'january');
                $difference = array_diff($array, $array2);
                echo "<br> after: <br>";
                print_r($difference);
            }
            array1();
        ?>
    </div>c
    <P>---------------------------------------------------------------------------</P>
    <!-- exercise 4 -->
    <div>
    <!-- using html -->
    <h1>TABLE</h1>
        <table border="2px solid black">
            <?php 
                echo "<tr><th>NAME</th><th>SALARY</th></tr>";
                echo "<tr><td>precious</td><td>99000</td></tr>";
                echo "<tr><td>irish</td><td>99000</td></tr>";
            ?>
        </table>
    </div>

    <P>---------------------------------------------------------------------------</P>
    <div>
        <?php 
            //shortcut
            $A = "A00";
            for($b=1;$b<=5;$b++){
                echo ++$A."<br>";
            }
        ?>
    </div>
    <P>---------------------------------------------------------------------------</P>
    <h1>LAST MODIFIED:</h1>
    <div>
    <!-- get last modified -->
        <?php 
            $file = 'activity1Day3.php';
            if(file_exists($file)){
                echo "\nlast modified on:"." ".date("F d Y H:i:s.",filemtime($file));
            }else{
                echo "file does not exists.";
            }
        ?>
    </div>
    <P>---------------------------------------------------------------------------</P>
    <div>
        <?php 
        
        ?>
    </div>
    <P>---------------------------------------------------------------------------</
    <div>
        <?php 
        //with function
            $word = "the quick brown fox and me";
            $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$word);
            echo "<br>".$text."<br>";
        //without function
            $buwag = explode(' ',$word);
            $arr1 = array();
            array_push($arr1,$buwag);
            foreach($arr1 as $sep){
                foreach($sep as $par){
                    $arr2 = array();
                    $rate = "<span class=\"word\">".$par[0]."</span>";
                    array_push($arr2,$rate);
                    print_r($rate.substr($par,1)." ");
                }
            }

        ?>
    </div>
    <h2>thank you!</h2>
</body>
</html>